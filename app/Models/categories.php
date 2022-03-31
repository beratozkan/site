<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    use HasFactory;
    protected $table = 'category_names';
    //const CREATED_AT = 'created_time';
    protected $connection = 'mysql';

    //protected $primaryKey = 'postid';
    protected $fillable = [
        "name",
        "category_information",
        "main_category_id"

    ];
        
}
