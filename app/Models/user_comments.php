<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_comments extends Model
{
    use HasFactory;
    protected $table = 'user_comment';
    protected $connection = 'mysql';
    protected $primaryKey = 'comment_id';

    protected $fillable = [
        "comment_id",
        "post_id",
        'comment_content',
        "user",
        'if_is_replyed',
        
    ];

}
