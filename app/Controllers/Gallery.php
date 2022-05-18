<?php

namespace App\Controllers;

class Gallery extends BaseController
{
    public function index()
    {
        // return view('LandingPage/landingpage_navigation');
        return view('Gallery/viewGallery');
    }
}
