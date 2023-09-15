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
use App\Models\salesorder_model;
use App\Models\salesorder_detail_model;




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

        if (empty($token) && $level != -1) {
            $this->data['is_login'] = false;
            echo "<h1>You are not authorised to enter this area</h1>";
            echo '<a href="' . base_url('signup_login') . '">Please Log in with admin account</a>';
            exit;
        } else {
            $this->data['is_login'] = true;
            $this->data['name'] = $name;
            $this->data['token'] = $token;
        }
    }


    public function index()
    {
        return view('admin/index', $this->data);
    }


    public function product_manage()
    {

        $productmodel = new product_model();
        $productlist = $productmodel->where(["is_deleted" => 0])->findAll();
        $this->data["productList"] = $productlist;

        return view("admin/productlist", $this->data);
    }

    public function product_add()
    {



        return view("admin/product_add", $this->data);
    }

    public function product_insert()
    {


        $title = $_POST['title'];
        $price = $_POST['price'];
        $short_desc = $_POST['short_desc'];
        $Taste = $_POST['Taste'];
        $Ingredients = $_POST['Ingredients'];
        $Weight = $_POST['Weight'];
        $sku = $_POST['sku'];
        $manufacturer = $_POST['manufacturer'];

        $image_url = "";

        if (empty($_FILES['image_url']['error'])) {

            // $filename = date("YmdHis") . ".jpg";

            $img = $this->request->getFile('image_url');
            $filename = $img->getName();
            if (!$img->hasMoved()) {
                $filepath = './uploads/' . $filename;
                $img->move('./uploads');

                // $image = \Config\Services::image();

                // $image->withFile($filepath)
                // ->fit(400,300,'center')
                // ->save($filepath);


                //$data = ['uploaded_fileinfo' => new File($filepath)];
                $image_url = $filepath;
            }
        }

        // if(empty($_FILES['image']['error'])){

        //     // $filename = date("YmdHis").".jpg";

        //     $img = $this->request->getFile('image');
        //     if (! $img->hasMoved()) {
        //         $filepath = WRITEPATH . 'uploads/' . $img->store();

        //         $image = \Config\Services::image();

        //         // $image->withFile($filepath)
        //         // ->fit(400,300,'center')
        //         // ->save($filepath);


        //         //$data = ['uploaded_fileinfo' => new File($filepath)];
        //         $image_url = $filepath;

        //     }

        // }

        $productmodel = new product_model();
        $productmodel->insert([
            'title' => $title,
            'price' => $price,
            'short_desc' => $short_desc,
            'Taste' => $Taste,
            'Ingredients' => $Ingredients,
            'Weight' => $Weight,
            'sku' => $sku,
            'manufacturer' => $manufacturer,
            'image_url' => $image_url,

            'created_date' => date("Y-m-d H:i:s")
        ]);

        return redirect()->to('product_manage');
    }

    public function product_edit($id)
    {


        $product_model = new product_model();
        $productData = $product_model->where(['is_deleted' => 0])->find($id);
        $this->data['productData'] = $productData;

        $this->data['id'] = $id;

        return view("admin/product_edit", $this->data);
    }

    public function product_update()
    {
        $product_id = $_POST['product_id'];
        $title = $_POST['title'];
        $price = $_POST['price'];
        $short_desc = $_POST['short_desc'];
        $Taste = $_POST['Taste'];
        $Ingredients = $_POST['Ingredients'];
        $Weight = $_POST['Weight'];
        $sku = $_POST['sku'];
        $manufacturer = $_POST['manufacturer'];

        $image_url = "";

        if (empty($_FILES['image_url']['error'])) {

            // $filename = date("YmdHis") . ".jpg";

            $img = $this->request->getFile('image_url');
            $filename = $img->getName();
            if (!$img->hasMoved()) {
                $filepath = './uploads/' . $filename;
                $img->move('./uploads');
                //$data = ['uploaded_fileinfo' => new File($filepath)];
                $image_url = $filepath;
            }
        }



        $product_model = new product_model();

        $product_model->update($product_id, [
            'title' => $title,
            'price' => $price,
            'short_desc' => $short_desc,
            'Taste' => $Taste,
            'Ingredients' => $Ingredients,
            'Weight' => $Weight,
            'sku' => $sku,
            'manufacturer' => $manufacturer,
            'image_url' => $image_url,
            'modified_date' => date("Y-m-d H:i:s")
        ]);

        return redirect()->to('product_manage');
    }


    public function product_del($id)
    {
       $product_model = new product_model();
       $product_model->update($id,[
        'is_deleted'=> 1,
        'modified_date'=> date('Y-m-d H:i:s'),

       ]);

       return redirect()->to("product_manage");
    }



    public function user_manage(){
        $usermodel = new user_model();
        $userlist = $usermodel->where(["is_deleted" => 0])->findAll();
        $this->data["userlist"] = $userlist;

        return view("admin/userlist", $this->data);

    }

    public function user_add()
    {
        return view("admin/user_add", $this->data);
    }


    public function user_insert()
    {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $Email = $_POST['Email'];
        $pass = $_POST['pass'];
        $phone = $_POST['phone'];
        $level = $_POST['level'];

        

        $usermodel = new user_model();
        $usermodel->insert([
            'firstname' => $firstname,
            'lastname' => $lastname,
            'email' => $Email,
            'pass' => $pass,
            'phone' => $phone,
            'level' => $level,
            'created_date' => date("Y-m-d H:i:s")
        ]);

        return redirect()->to('user_manage');
    }

    public function user_edit($id)
    {


        $usermodel = new user_model();
        $userdata = $usermodel->where(['is_deleted' => 0])->find($id);
        $this->data['userdata'] = $userdata;

        $this->data['id'] = $id;

        return view("admin/user_edit", $this->data);
    }

    public function user_update()
    {
        $user_id = $_POST['user_id'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $Email = $_POST['Email'];
        $pass = $_POST['pass'];
        $phone = $_POST['phone'];
        $level = $_POST['level'];



        $usermodel = new user_model();

        $usermodel->update($user_id, [
            'firstname' => $firstname,
            'lastname' => $lastname,
            'email' => $Email,
            'pass' => $pass,
            'phone' => $phone,
            'level' => $level,
            'modified_date' => date("Y-m-d H:i:s")
        ]);

        return redirect()->to('user_manage');
    }


    public function user_del($id)
    {
       $usermodel = new user_model();
       $usermodel->update($id,[
        'is_deleted'=> 1,
        'modified_date'=> date('Y-m-d H:i:s'),

       ]);

       return redirect()->to("user_manage");
    }



    public function so_manage(){
        $so_model = new salesorder_model();
        $solist = $so_model->where(["is_deleted" => 0])->findAll();
        $this->data["solist"] = $solist;

        return view("admin/so_list", $this->data);

    }

    public function so_add()
    {
        return view("admin/so_add", $this->data);
    }


    public function so_insert()
    {
        $user_id = $_POST['user_id'];
        $firstname = $_POST['firstname'];
        $serial = $_POST['serial'];
        $total_amount = $_POST['total_amount'];
        $remarks = $_POST['remarks'];
        $lastname = $_POST['lastname'];
        $Email = $_POST['Email'];
        $phone = $_POST['phone'];
        $country = $_POST['country'];
        $City = $_POST['City'];
        $Postcode = $_POST['Postcode'];
        $Address1 = $_POST['Address1'];
        $Address2 = $_POST['Address2'];
       
        

        $so_model = new salesorder_model();
        $so_model->insert([
            'user_id' => $user_id,
            'serial' => $serial,
            'total_amount' => $total_amount,
            'shipping_firstname' => $firstname,
            'shipping_lastname' => $lastname,
            'shipping_phone' => $phone,
            'shipping_email' => $Email,
            'shipping_add1' => $Address1,
            'shipping_add2' => $Address2,
            'shipping_city' => $City,
            'shipping_zip' => $Postcode,
            'remarks' => $remarks,
            'shipping_country' => $country,
            'created_date' => date("Y-m-d H:i:s")
        ]);

        return redirect()->to('so_manage');
    }

    public function so_edit($so_id)
    {


        $so_model = new salesorder_model();
        $sodata = $so_model->where(['is_deleted' => 0])->find($so_id);
        $this->data['sodata'] = $sodata;
        // print_r($sodata);
        // exit;

        $this->data['so_id'] = $so_id;

        return view("admin/so_edit", $this->data);
    }

    public function so_update()
    {
        $so_id = $_POST['so_id'];

        $user_id = $_POST['user_id'];
        $firstname = $_POST['firstname'];
        $serial = $_POST['serial'];
        $total_amount = $_POST['total_amount'];
        $remarks = $_POST['remarks'];
        $lastname = $_POST['lastname'];
        $Email = $_POST['Email'];
        $phone = $_POST['phone'];
        $country = $_POST['country'];
        $City = $_POST['City'];
        $Postcode = $_POST['Postcode'];
        $Address1 = $_POST['Address1'];
        $Address2 = $_POST['Address2'];



        $so_model = new salesorder_model();

        $so_model->update($so_id , [
                'user_id' => $user_id,
                'serial' => $serial,
                'total_amount' => $total_amount,
                'shipping_firstname' => $firstname,
                'shipping_lastname' => $lastname,
                'shipping_phone' => $phone,
                'shipping_email' => $Email,
                'shipping_add1' => $Address1,
                'shipping_add2' => $Address2,
                'shipping_city' => $City,
                'shipping_zip' => $Postcode,
                'remarks' => $remarks,
                'shipping_country' => $country,
                 'modified_date' => date("Y-m-d H:i:s")
        ]);

        return redirect()->to('so_manage');
    }


    public function so_del($id)
    {
       $so_model = new salesorder_model();
       $so_model->update($id,[
        'is_deleted'=> 1,
        'modified_date'=> date('Y-m-d H:i:s'),

       ]);

       return redirect()->to("so_manage");
    }
}
