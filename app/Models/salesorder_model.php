<?php

namespace App\Models;

use CodeIgniter\Model;

class salesorder_model extends Model {

    protected $table = "sales_order";
    protected $primaryKey = "so_id";
    protected $allowedFields = [
        "user_id",
        "serial",
        "total_amount",
        "final_amount",
        "shipping_firstname",
        "shipping_lastname",
        "shipping_phone",
        "shipping_fax",
        "shipping_email",
        "shipping_add1",
        "shipping_add2",
        "shipping_country",
        "shipping_city",
        "shipping_zip",
        "remarks",
        "is_deleted",
        "created_date",
        "modified_date"
    ];

}

?>