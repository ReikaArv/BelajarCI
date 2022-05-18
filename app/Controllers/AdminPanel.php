<?php

namespace App\Controllers;

use App\Models\ModelAdmin;

class AdminPanel extends BaseController
{
    public function index()
    {
        helper('form');
        $admin = new ModelAdmin();
        $trxlist = [
            'showData' => $admin->showData()->getResult(),
        ];
        return view('AdminPanel/viewPanel', $trxlist);
    }

    public function saveData() {
        
    }
}
