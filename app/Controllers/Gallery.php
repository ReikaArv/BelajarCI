<?php

namespace App\Controllers;

class Gallery extends BaseController
{
    public function index()
    {
        $data = [
            'pageTitle' => 'Koleksi Foto',
        ];
        // return view('LandingPage/landingpage_navigation');
        return view('Gallery/viewGallery', $data);
    }
}
