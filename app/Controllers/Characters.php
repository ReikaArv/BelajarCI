<?php

namespace App\Controllers;

use Codeigniter\Controller;
use App\Models\ModelChars;
use Config\View;

class Characters extends BaseController
{
    public function index()
    {
        $characters = new ModelChars();
        $data = [
            'showData' => $characters->showData()->getResult()
        ];

        echo view('viewShowData', $data);
    }

    public function addForm()
    {
        helper('form');
        echo view('viewAddForm');
    }

    public function saveData()
    {
        $data = [
            'name' => $this->request->getPost('name')
        ];

        $characters = new ModelChars();
        $datasave = $characters->saveData($data);

        if ($datasave) {
            return redirect()->to('Characters');
        }
    }

    function Delete()
    {
        $uri = service('uri');
        $id = $uri->getSegment('3');

        $characters = new ModelChars();
        $characters->deleteData($id);

        return redirect()->to('Characters');
    }

    function editForm()
    {
        helper('form');
        $uri = service('uri');
        $id = $uri->getSegment('3');

        $characters = new ModelChars();

        $getData = $characters->getData($id);

        if (count($getData->getResult()) > 0) {
            $row = $getData->getRow();
            $data = [
                'id' => $id,
                'name' => $row->name,
            ];
        }

        echo View('viewEditForm', $data);
    }

    function updateData()
    {
        $id = $this->request->getPost('id');
        $data = [
            'id' => $this->request->getPost('id'),
            'name' => $this->request->getPost('name')
        ];

        $characters = new ModelChars();
        $dataUpdate = $characters->updateData($data, $id);

        if ($dataUpdate) {
            return redirect()->to('Characters');
        }
    }
}
