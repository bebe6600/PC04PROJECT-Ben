<?php

namespace App\Controllers;

class Home extends user
{
    public function index(): string
    {
        return view('header',$this->data).view('home').view('footer');
    }

    public function about(): string
    {
        return view('header',$this->data).view('about').view('footer');
    }

    public function contact(): string
    {
        return view('header',$this->data).view('contact').view('footer');
    }
}
