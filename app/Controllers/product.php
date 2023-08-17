<?php

namespace App\Controllers;

use App\Models\product_model;



class product extends BaseController
{
    private $data = [];

    public function productList()
    {
        $productmodel = new product_model();
        $productList = $productmodel->findAll();
        $this->data["productlist"] = $productList;

        return view("header").view("productlist", $this->data).view("footer");
    }

    public function product($product_id){
       $productmodel =  new product_model();
      $single_product = $productmodel->where(["product_id"=>$product_id])->first();
      $this->data["single_p"] =$single_product;
      
      return view("header").view("product", $this->data).view("footer");

    }
}
