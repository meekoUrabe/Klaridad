<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = "user";
    protected $primaryKey = "user_id";
    public $timestamps = false;

    protected $fillable = [
        'user_role_id',
        'barangay_id',
        'first_name',
        'last_name',
        'phone_number',
        'password'
    ];

    public function userRole()
    {
        return $this->belongsTo(UserRole::class, 'user_role_id', 'user_role_id');
    }

    public function userAccess()
    {
        return $this->belongsTo(UserAccess::class, 'user_id', 'user_id');
<<<<<<< HEAD
    }   
=======
    }
>>>>>>> 1ec72c2ac4bd98a2919bb4981e0a5eee4550803b

    public function hasRole($role) {
        return $this->userRole?->role == $role;
    }
}
