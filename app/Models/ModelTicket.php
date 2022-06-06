<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Database\BaseBuilder;

class ModelTicket extends Model
{
    function __construct()
    {
        $this->dbconn = db_connect();
    }

    function showData()
    {
        return $this->dbconn->table('tickets')->get();
    }

    function getLatestTrxId()
    {
        return $this->dbconn->table('transaction')->selectMax('trx_id')->get();
    }

    function saveData($data)
    {
        return $this->dbconn->table('transaction')->insert($data);
    }

    function savefromQr($data)
    {
        return $this->dbconn->table('transaction')->insert($data);
    }
}
