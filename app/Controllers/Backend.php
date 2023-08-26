<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

use App\Models\product_model;
use App\Models\User_model;



class Backend extends BaseController
{

    private $data = [];
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

        if(empty($token) && $level != -1) {
            $this->data['is_login'] = false;
            echo "<h1>You are not authorised to enter this area</h1>";
            echo '<a href="'.base_url('signup_login').'">Please Log in with admin account</a>';
            exit;
        
        } else {
            $this->data['is_login'] = true;
            $this->data['name'] = $name;
            $this->data['token'] = $token;
        }
    }


    public function index()
    {
    return view('admin/index',$this->data);
    }

    
    public function product_manage(){

    $productmodel =new product_model();
    $productlist =$productmodel->where(["is_deleted" => 0])->findAll();
        $this->data["productList"] =$productlist;

        return view("admin/productlist",$this->data);
    }

    public function product_add(){
    
    }

    public function product_del($id){
    
    }

    
    public function product_submit(){
    
    }
}
