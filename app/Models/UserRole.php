<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    protected $table = "user_role";
    protected $primaryKey = "user_role_id";
    public $timestamps = false;

    protected $fillable = [
        'role'
    ];
}
