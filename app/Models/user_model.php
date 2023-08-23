<?php

namespace App\Models;

use CodeIgniter\Model;

class User_model extends Model {

    protected $table = "user";
    protected $primaryKey = "user_id";
    protected $allowedFields = [
        "firstname",
        "lastname",
        "email",
        "phone",
        "pass",
        "token",
        "level",
        "is_deleted",
        "created_date",
        "modified_date"
    ];

}

?>