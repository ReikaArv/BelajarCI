<?php

namespace App\Controllers;

use App\Models\ModelAdmin;
use CodeIgniter\I18n\Time;

class AdminPanel extends BaseController
{
    public function index()
    {
        helper('form');
        $admin = new ModelAdmin();
        $trxlist = [
            'showData' => $admin->showData()->getResult(),
            'pageTitle' => 'Halaman Admin',
        ];
        return view('AdminPanel/viewPanel', $trxlist);
    }

    public function saveData()
    {
    }

    public function updateData()
    {
        $admin = new ModelAdmin();
        $id = $this->request->getPost('id-transaksi');
        $nowTime = Time::now();
        $updatedata = [
            'trx_desc' => $this->request->getPost('desc-transaksi'),
            'trx_value' => $this->request->getPost('value-transaksi'),
            'trx_status' => $this->request->getPost('status'),
            'trx_validationTime' => $nowTime,

        ];

        $dataUpdate = $admin->updateData($updatedata, $id);

        if ($dataUpdate) {
            return redirect()->to('admin');
        }
    }

    public function deleteData()
    {
        $admin = new ModelAdmin();
        $id = $this->request->getPost('trx_id');
        $admin->deleteData($id);
        return redirect()->to('Admin');
    }
}
