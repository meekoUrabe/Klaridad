<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReportStatus extends Model
{
    protected $table = "report_status";
    protected $primaryKey = "report_s_id";
    public $timestamps = false;

    protected $fillable = [
        'status'
    ];
}
