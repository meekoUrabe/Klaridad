<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectStatus extends Model
{
    protected $table = "project_status";
    protected $primaryKey = "project_s_id";
    public $timestamps = false;

    protected $fillable = [
        'status'
    ];
}
