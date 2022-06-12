<?php

namespace App\Models;

use App\Controllers\Auth;
use CodeIgniter\Model;
use CodeIgniter\Database\BaseBuilder;

class ModelAuth extends Auth
{
    function __construct()
    {
        $this->dbconn = db_connect();
    }

    function loginProcess()
    {
        $post = $this->request->getPost();
        $query = $this->dbconn->table('accounts')->getWhere(['username' => $post['username']]);
        $user   = $query->getRow();

        return $user;
    }
}
