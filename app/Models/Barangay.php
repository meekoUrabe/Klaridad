<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barangay extends Model
{
    protected $table = "barangay";
    protected $primaryKey = "barangay_id";
    public $timestamps = false;

    protected $fillable = [
        'name'
    ];
}
