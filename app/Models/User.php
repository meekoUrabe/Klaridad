<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = "user";
    protected $primaryKey = "user_id";
    public $timestamps = false;

    protected $fillable = [
        'user_role_id',
        'barangay_id',
        'first_name',
        'last_name'
    ];

    public function userRole()
    {
        return $this->belongsTo(UserRole::class, 'user_role_id', 'user_role_id');
    }

    public function userAccess()
    {
        return $this->belongsTo(UserAccess::class, 'user_id', 'user_id');
    }

    public function hasRole($role) {
        return $this->userRole?->role == $role;
    }
}
