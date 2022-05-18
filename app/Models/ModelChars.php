<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelChars extends Model
{
    function __construct()
    {
        $this->dbconn = db_connect();
    }

    function showData()
    {
        return $this->dbconn->table('char_genshin')->get();
    }

    function saveData($data)
    {
        return $this->dbconn->table('char_genshin')->insert($data);
    }

    function deleteData($id)
    {
        return $this->dbconn->table('char_genshin')->delete(['id' => $id]);
    }

    function getData($id)
    {
        return $this->dbconn->table('char_genshin')->getWhere(['id' => $id]);
    }

    function updateData($data, $id)
    {
        return $this->dbconn->table('char_genshin')->update($data, ['id' => $id]);
    }
}
