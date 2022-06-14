<?php

namespace App\Controllers;

class Gallery extends BaseController
{
    public function index()
    {
        $url = "https://graph.instagram.com/me/";
        $getPost = "media?fields=id,caption,media_url,permalink,thumbnail_url,media_type,timestamp";
        $token = "IGQVJYNjJkMmduYjVnUDdkN2J5ZAkFBZAW5tSmJnQWFUUkd1NWFJV3QzRHdGaUJUNE9qREFtMnhoZAV9CMm90YV9WcVoxbk5kTnJzdnpyaWY3eXpxSzRpT0NGYXRqRHNIWG52MFRBV2kzMEVXTWRTX1lHeAZDZD";
        $access_url = $url . $getPost . "&access_token=" . $token;



        $curl = curl_init($access_url);
        curl_setopt($curl, CURLOPT_URL, $access_url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);


        // for debug only!
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

        $resp = curl_exec($curl);
        curl_close($curl);

        $decode = json_decode($resp, true);

        $data = [
            'pageTitle' => 'Postingan IG Kami',
            'decode' => $decode,
        ];

        

        return view('Gallery/viewIGFeed', $data);
        // return view('Gallery/viewGallery', $data);
        


    }
}
