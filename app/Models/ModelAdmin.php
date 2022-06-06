<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAdmin extends Model
{
    protected $table = 'transaction';

    function __construct()
    {
        $this->dbconn = db_connect();
        $this->builder = $this->dbconn->table($this->table);
    }

    function showData()
    {
        $sorter = $this->builder->orderBy('trx_id', 'DESC');
        $query = $sorter->get();
        return $query;
        // return $this->dbconn->table('transaction')->get();
    }

    function saveData($data)
    {
        return $this->builder->insert($data);
    }

    function updateData($updatedata, $id)
    {
        return $this->builder->update($updatedata, ['trx_id' => $id]);
    }

    function deleteData($id) {
        return $this->builder->delete(['trx_id' => $id]);
    }
}
