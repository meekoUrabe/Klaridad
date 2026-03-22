<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = "project";
    protected $primaryKey = "project_id";
    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'sector_id',
        'project_s_id',
        'name',
        'budget',
        'description',
        'picture_path'
    ];
}
