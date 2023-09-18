<?php

namespace App\Controllers;

use App\Models\contactus_model;

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

    public function contact_submit(){
        $name       = $_POST['name'];
        $phone        = $_POST['phone'];
        $email      = $_POST['email'];
        $message    = $_POST['message'];

        $contactus_model =new contactus_model();
        $contactus_model->insert([
            'name'=>$name,
            'email'=>$email,
            'phone'=>$phone,
            'message'=>$message,
            'created_date'=>date('Y-m-d H:i:s')
        ]);

        return redirect()->to('contact_thanks');

        


    }
    public function contact_thanks(){

        return view('header',$this->data).view('contact_thanks').view('footer');

}
   
}