<?php

namespace App\Models;

use CodeIgniter\Model;

class cart_model extends Model {

    protected $table = "cart";
    protected $primaryKey = "cart_id";
    protected $allowedFields = [
        "user_id",
        "product_id",
        "qty",
        "price",
        "is_deleted",
        "created_date",
        "modified_date"
    ];

}

?>