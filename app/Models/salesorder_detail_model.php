<?php

namespace App\Models;

use CodeIgniter\Model;

class salesorder_detail_model extends Model {

    protected $table = "sales_order_details";
    protected $primaryKey = "sod_id";
    protected $allowedFields = [
        "so_id",
        "user_id",
        "product_id",
        "product_title",
        "product_price",
        "product_size",
        "product_variations",
        "qty",
        "price_qty",
        "is_deleted",
        "created_date",
        "modified_date"
    ];

}

?>