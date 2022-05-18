<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Database\BaseBuilder;

class ModelAdmin extends Model
{
    function __construct()
    {
        $this->dbconn = db_connect();
    }

    function showData()
    {
        $builder = $this->dbconn->table('transaction')->orderBy('trx_id', 'DESC');
        $query = $builder->get();
        return $query;
        // return $this->dbconn->table('transaction')->get();
    }

    function saveData($data)
    {
        return $this->dbconn->table('transaction')->insert($data);
    }
}
