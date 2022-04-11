<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userPosts extends Model
{
    use HasFactory;
    protected $table = 'user_post';
    //const CREATED_AT = 'created_time';
    protected $connection = 'mysql';
    

    protected $primaryKey = 'post_id';
    protected $fillable = [
        "post_id",
        'user',
        "post_title",
        'post_content',
        'post_category_id',
    ];

    
}
