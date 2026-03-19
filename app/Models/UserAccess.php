<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserAccess extends Model
{
    protected $table = "user_access";
    protected $primaryKey = "user_id";
    public $timestamps = false;

    protected $fillable = [
        'city_id',
        'barangay_id'
    ];
}
