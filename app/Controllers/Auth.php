<?php

namespace App\Controllers;

use App\Models\ModelAuth;

class Auth extends BaseController
{
    public function index()
    {
        return redirect()->to(site_url('login'));
    }

    public function login()
    {
        helper('form');
        return view('Auth/viewLogin');
        
    }

    public function loginProcess()
    {   

        helper('form');
        $this->dbconn = db_connect();
        $post = $this->request->getPost();
        $query = $this->dbconn->table('accounts')->getWhere(['username' => $post['username']]);
        $user   = $query->getRow();
        if($user){
            if($post['password'] == $user->password){
                $data = [
                    'username' => $user->username,
                    'logged_in' => true,
                ];
                session()->set($data);
                return redirect()->to(site_url('admin'));
            } else {
                return redirect()->back()->with('error', 'Username atau Password Salah');
            }
        };
        // if($user){
        //   return redirect()->to('admin');
        // } else {
        //     return redirect()->back()->with('error', 'Username atau Password Salah');
        // };

        // $user = $this->db->table('users')->where('username', $data['username'])->first();
    }

}
