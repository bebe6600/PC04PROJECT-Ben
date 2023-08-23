<?php

namespace App\Controllers;

use App\Models\product_model;



class product extends user
{
    private $data_p = [];

    public function productList()
    {
        $productmodel = new product_model();
        $productList = $productmodel->findAll();
        $this->data_p["productlist"] = $productList;

        return view("header",$this->data).view("productlist", $this->data_p).view("footer");
    }

    public function product($product_id){
       $productmodel =  new product_model();
      $single_product = $productmodel->where(["product_id"=>$product_id])->first();
      $this->data_p["single_p"] =$single_product;
      
      return view("header",$this->data).view("product", $this->data_p).view("footer");

    }
}
