<?php

namespace App\Controllers;

class LandingPage extends BaseController
{
    public function index()
    {
        $data = [
            'pageTitle' => 'Halaman Utama',
        ];
        // return view('LandingPage/landingpage_navigation');
        return view('LandingPage/viewLanding', $data);
    }
}
