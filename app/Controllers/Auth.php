<?php

namespace App\Controllers;

use App\Models\ModelAuth;
use CodeIgniter\I18n\Time;

class Auth extends BaseController
{
    public function index()
    {
        return redirect()->to(site_url('login'));
    }

    public function login()
    {
        helper('form');
        if (session('logged_in')) {
            return redirect()->to(site_url('admin'));
        };
        $data = [
            'pageTitle' => 'Login',
        ];
        return view('Auth/viewLogin', $data);
    }

    public function loginProcess()
    {

        helper('form');
        $this->dbconn = db_connect();
        $post = $this->request->getPost();
        $query = $this->dbconn->table('accounts')->getWhere(['username' => $post['username']]);
        $user   = $query->getRow();
        if ($user) {
            if ($post['password'] == $user->password) {
                $data = [
                    'username' => $user->username,
                    'logged_in' => true,
                    'login_time' => date("h:i"),
                ];
                session()->set($data);
                return redirect()->to(site_url('admin'));
            } else {
                return redirect()->back()->with('error', 'Password Salah');
            }
        };
        return redirect()->back()->with('error', 'Username tidak ditemukan');
        // if($user){
        //   return redirect()->to('admin');
        // } else {
        //     return redirect()->back()->with('error', 'Username atau Password Salah');
        // };

        // $user = $this->db->table('users')->where('username', $data['username'])->first();
    }

    public  function logout()
    {
        session()->destroy();
        return redirect()->to(site_url('login'));
    }
}
