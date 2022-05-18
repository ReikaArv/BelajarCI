<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ModelTicket;

class Tickets extends BaseController
{
    public function Index()
    {
        helper('form');
        $tickets = new ModelTicket();
        $tixlist = [
            'showData' => $tickets->showData()->getResult(),
            'getTrxId' => $tickets->getLatestTrxId()->getRow()
        ];

        echo view('Tickets/viewTicketList', $tixlist);
    }


    public function saveData()
    {

        // Prices stuff
        $tix1num = $this->request->getPost('order2');
        $tix1totalprice = $tix1num * 5000;
        $tix2num = $this->request->getPost('order3');
        $tix2totalprice = $tix2num * 2000;
        $totalprice = $tix1totalprice + $tix2totalprice;

        // Ticket naming
        $tix1name = "Tiket Masuk";
        $tix2name = "Parkir";

        $tix1fullname = $tix1name . ' x' . $tix1num;
        $tix2fullname = $tix2name . ' x' . $tix2num;
        $tix_desc = $tix1fullname . ' | ' . $tix2fullname;


        $data = [
            'trx_id' => $this->request->getPost('trxid'),
            'trx_value' => $totalprice,
            'trx_desc' => $tix_desc,
            'trx_status' => 'Pending',
        ];

        if ($data['trx_value'] != 0) {
            $tickets = new ModelTicket();
            $datasave = $tickets->saveData($data);

            if ($datasave) {
                // return redirect()->to('Tickets');
                // echo 'data tersimpan';
                var_dump($tix_desc);
            }

        } else {
            echo 'gagal';
        }
    }
}
