<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    protected $table = "sector";
    protected $primaryKey = "sector_id";
    public $timestamps = false;

    protected $fillable = [
        'name'
    ];
}
