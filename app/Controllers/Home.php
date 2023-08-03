<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('header').view('home').view('footer');
    }

    public function about(): string
    {
        return view('header').view('about').view('footer');
    }

    public function contact(): string
    {
        return view('header').view('contact').view('footer');
    }
}
