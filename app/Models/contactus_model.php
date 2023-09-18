<?php

namespace App\Models;

use CodeIgniter\Model;

class contactus_model extends Model {

    protected $table = "contactus";
    protected $primaryKey = "contact_id ";
    protected $allowedFields = [
        "name",
        "email",
        "phone",
        "message",
        "is_deleted",
        "created_date",
        "modified_date"
    ];

}

?>