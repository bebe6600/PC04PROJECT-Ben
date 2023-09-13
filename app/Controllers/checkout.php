<?php

namespace App\Controllers;

use App\Models\product_model;
use App\Models\user_model;
use App\Models\cart_model;
use App\Models\salesorder_model;
use App\Models\salesorder_detail_model;



class checkout extends user
{
    public function checkout_address()
    {

        return view('header', $this->data) . view('checkout_page') . view('footer', $this->data);
    }


    public function checkout_submit()
    {
        $usermodel = new user_model();
        $userdata = $usermodel->where([
            'token' => $this->data['token'],
            'is_deleted' => 0,
        ])->first();

        if (empty($userdata)) {
            throw new \Exception("invalid token");
        }


        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['Email'];
        $phone = $_POST['Phone'];
        $remarks = $_POST['remarks'];
        $country = $_POST['country'];
        $City = $_POST['City'];
        $Postcode = $_POST['Postcode'];
        $Address1 = $_POST['Address1'];
        $Address2 = $_POST['Address2'];

        $serial = date('Ymdhis');
        $salesorder = new salesorder_model();
        $so_id = $salesorder->insert([
            'user_id' => $userdata['user_id'],
            'shipping_firstname' => $firstname,
            'shipping_lastname' => $lastname,
            'shipping_email' => $email,
            'shipping_phone' => $phone,
            'remarks' => $remarks,
            'shipping_country' => $country,
            'shipping_city	' => $City,
            'shipping_zip' => $Postcode,
            'shipping_add1' => $Address1,
            'shipping_add2' => $Address2,
            'total_amount' => 0,
            'serial' => $serial,
            'created_date' => date("Y-m-d H:i:s"),

        ]);

        $sod_model = new salesorder_detail_model();

        $cartmodel = new cart_model();
        $cartlist = $cartmodel->where([
            'user_id' => $userdata['user_id'],
            'is_deleted' => 0
        ])->findAll();

        $total_amount = 0;
        $productmodel = new product_model();

        foreach ($cartlist as $k => $v) {
            $total_amout = $v['qty'] * $v['price'];

            $productdata =  $productmodel->where([
                'product_id' => $v['product_id'],
                'is_deleted' => 0
            ])->first();

            $sod_model->insert([
                'so_id' => $so_id,
                'user_id' => $userdata['user_id'],
                'product_id' => $v['product_id'],
                'product_title' => $productdata['title'],
                'product_price' => $v['price'],
                'qty'           => $v['qty'],
                'price_qty'     => $v['qty'] * $v['price'],
                'created_date'  => date("Y-m-d H:i:s")
            ]);

            $cartmodel->update($v['cart_id'], [
                'is_deleted' => 1,
                'modified_date' => date('Y-m-d H:i:s')
            ]);
        }

       $sod_model->update($so_id,[
            'total_amount'=>$total_amount,   
            'modified_date' => date('Y-m-d H:i:s')
  
        ]);

        return redirect()->to('/checkout_complete?order_Serial='.$serial)->withCookies();
    }

    public function checkout_complete(){

        $order_serial =$_GET['order_Serial'];
        $this->data['order_serial'] =$order_serial;

        return view('header', $this->data).view('checkout_complete', $this->data).view('footer', $this->data);

    }
}
