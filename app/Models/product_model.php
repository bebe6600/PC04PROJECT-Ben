<?php

namespace App\Models;

use CodeIgniter\Model;

class product_model extends Model {

    protected $table = "product";
    protected $primaryKey = "product_id";
    protected $allowedFields = [
        "title",
        "image_url",
        "price",
        "short_desc",
        "teste",
        "Ingredients",
        "Weight",
        "sku",
        "manufacturer",
        "is_deleted",
        "created_date",
        "modified_date"
    ];

}

?>