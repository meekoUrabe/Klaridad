<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $table = "report";
    protected $primaryKey = "report_id";
    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'sector_id',
        'report_c_id',
        'report_s_id',
        'anonymous',
        'likes',
        'description',
        'location',
        'picture_path'
    ];
}
