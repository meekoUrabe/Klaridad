<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReportCategory extends Model
{
    protected $table = "report_category";
    protected $primaryKey = "report_c_id";
    public $timestamps = false;

    protected $fillable = [
        'category'
    ];
}
