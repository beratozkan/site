<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userPosts extends Model
{
    use HasFactory;
    protected $table = 'usersPost';
    const CREATED_AT = 'created_time';
    protected $primaryKey = 'postid';
    protected $fillable = [
        'username',
        'postitle',
        'postContent',
        'created_time',
        'postid',
    ];
    
}
