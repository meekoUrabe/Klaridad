<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserAccess extends Model
{
    protected $table = "user_access";
    protected $primaryKey = "user_id";
    public $timestamps = false;

    protected $fillable = [
<<<<<<< HEAD
=======
        'user_id',
>>>>>>> 1ec72c2ac4bd98a2919bb4981e0a5eee4550803b
        'city_id',
        'barangay_id'
    ];
}
