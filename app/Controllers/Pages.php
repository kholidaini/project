<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'SYTX Home'
        ];

        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'SYTX About'
        ];

        return view('pages/about', $data);
    }

    //--------------------------------------------------------------------

}
