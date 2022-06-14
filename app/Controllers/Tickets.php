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

    public function savefromQr()
    {

        // Prices stuff
        $tix1num = $this->request->getPost('tiket-orang');
        if (is_null($tix1num)) {
            $tix1num = 0;
        }
        $tix1totalprice = $tix1num * 5000;
        $tix2num = $this->request->getPost('tiket-parkir');
        if (is_null($tix2num)) {
            $tix2num = 0;
        }
        $tix2totalprice = $tix2num * 2000;
        $totalprice = $tix1totalprice + $tix2totalprice;

        // Ticket naming
        $tix1name = "Tiket Masuk";
        $tix2name = "Parkir";

        $tix1fullname = $tix1name . ' x' . $tix1num;
        $tix2fullname = $tix2name . ' x' . $tix2num;
        $tix_desc = $tix1fullname . ' | ' . $tix2fullname;


        $data = [
            'trx_id' => $this->request->getPost('id-tiket'),
            'trx_value' => $totalprice,
            'trx_desc' => $tix_desc,
            'trx_status' => 'Pending',
        ];

        if ($data['trx_value'] != 0) {
            $tickets = new ModelTicket();
            $datasave = $tickets->savefromQr($data);
            return redirect()->to('tickets/buySuccess');
        } else {
            echo 'gagal';
        }

    }

    public function buySuccess() {
        $tickets = new ModelTicket();
        $tixlist = [
            'showData' => $tickets->showData()->getResult(),
            'getTrxId' => $tickets->getLatestTrxId()->getRow()
        ];
        echo view('Tickets/success', $tixlist);
    }

    public function checkTicket() {
        helper('form');
        $tickets = new ModelTicket();
        $userinput = $this->request->getPost();
        $query = $this->dbconn->table('transaction')->getWhere(['username' => $userinput['username']]);


        echo view('Tickets/checkTicket', $tix);
    }
}
