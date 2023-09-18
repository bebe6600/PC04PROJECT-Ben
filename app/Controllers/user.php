<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;
use App\Models\product_model;
use App\Models\user_model;



class user extends BaseController
{

    protected $data = [];

    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // Preload any models, libraries, etc, here.
        // E.g.: $this->session = \Config\Services::session();
        $session = \Config\Services::session();
        $token = $session->get("token");
        $name = $session->get("name");
        $level = $session->get("level");

        if(empty($token)) {
            $this->data['is_login'] = false;
            $this->data['token'] = "";
            
        } else {
            $this->data['is_login'] = true;
            $this->data['name'] = $name;
            $this->data['token'] = $token;
            $this->data['level'] = $level;
        }


    }
  

    public function signup_login(){

        return view('header',$this->data).view('signup_login').view('footer',$this->data);
    }

    public function signup_submit(){

      $firstname =  $_POST['firstname'];
      $lastname =  $_POST['lastname'];
      $email =  $_POST['email'];
      $phone =  $_POST['phone'];
      $pass =  $_POST['pass'];
      $copass =  $_POST['copass'];

      if(empty($email)){
        return redirect()->to("/signup_login?err=email cannot be empty");
      }  
      if(empty($pass)){
        return redirect()->to("/signup_login?err=password cannot be empty");
      }
      if($pass != $copass){
        return redirect()->to("/signup_login?err=password must same with confirm password");
      }

      $usermodel =new user_model();
      $userdata =$usermodel->where(['email'=>$email,'is_deleted'=>0
      ])->first();
      if(!empty($userdata)){
        return redirect()->to("/signup_login?err=email is already exists");
      }

      $usermodel->insert([
        "firstname" => $firstname,
        "lastname" => $lastname,
        "email" => $email,
        "phone" => $phone,
        "pass" => $pass,
        "created_date" =>date("Y:m:d H:i:s")
      ]);

        return redirect()->to("signup_thanks");

        



    }

    public function login_submit(){

       $email = $_POST['email'];
       $pass = $_POST['pass'];

       $usermodel =new user_model();
      $userdata = $usermodel->where([
            'email' =>$email,
            'pass' =>$pass,
            'is_deleted' =>0
        ])->first();
        if(empty($userdata)){
            return redirect()->to("signup_login?err=invalid email or password");
        } 
        $token = md5(date("Ymdhis").rand(1000,9999));
        helper("cookie");
        set_cookie("token",$token,time()+7*24*3600);

        $session =\Config\Services::session();
        $session->set([
            'name' => $userdata['firstname']." ".$userdata['lastname'],
            'token' => $token,
            'level' =>$userdata['level']

        ]);

        $usermodel->update(['user_id'=>$userdata['user_id']],[
            'token' =>$token,
            'modified_date' =>date("Y-m-d H:i:s"),
        ]);

        return redirect()->to("/")->withCookies();


    }

    public function signup_thanks(){


        return view('header',$this->data).view('signup_thanks').view('footer',$this->data);


    }

    
    public function logout(){
        $session = \Config\Services::session();
        $session->destroy();
        return redirect()->to("/");
    }


}
