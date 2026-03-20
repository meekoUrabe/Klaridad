<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = "post";
    protected $primaryKey = "post_id";
    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'sector_id',
        'post_s_id',
        'likes',
        'message',
        'anonymous'
    ];
}
