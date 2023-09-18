<?php

namespace App\Controllers;

use App\Models\product_model;
use App\Models\user_model;
use App\Models\cart_model;



class product extends user
{
    private $data_p = [];

    public function productList()
    {
        $productmodel = new product_model();
        $productList = $productmodel->where(["is_deleted" => 0])->findAll();
        $this->data_p["productlist"] = $productList;

        return view("header", $this->data) . view("productlist", $this->data_p) . view("footer");
    }

    public function product($product_id)
    {
        $productmodel =  new product_model();
        $single_product = $productmodel->where(["product_id" => $product_id])->first();
        $this->data_p["single_p"] = $single_product;

        return view("header", $this->data) . view("product", $this->data_p) . view("footer");
    }

    public function cart()
    {

        $user_model = new user_model();

        $userdata = $user_model->where([
            'token' => $this->data['token'],
            'is_deleted' => 0,
        ])->first();

        if (empty($userdata)) {
          
           return redirect()->to("/");

        }

        $cart_model = new cart_model();

        $cartList = $cart_model->where([
            'user_id' => $userdata['user_id'],
            'is_deleted' => 0,
        ])->findAll();

        $product_model = new Product_model();

        foreach ($cartList as $k => $v) {

            $productData = $product_model->where([
                'product_id' => $v['product_id']
            ])->first();

            $cartList[$k]['title'] = $productData['title'];
            $cartList[$k]['image_url'] = $productData['image_url'];

      
        }
        $this->data_p['cartList']= $cartList;
        return view("header", $this->data) . view("cart", $this->data_p) . view("footer", $this->data);
    }
}
