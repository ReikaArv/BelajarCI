<?php

namespace App\Controllers;

class LandingPage extends BaseController
{
    public function index()
    {
        // return view('LandingPage/landingpage_navigation');
        return view('LandingPage/viewLanding');
    }
}
