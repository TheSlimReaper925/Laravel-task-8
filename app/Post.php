<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table='post';
    protected $fillable=['user_id', 'category_id', 'title', 'description', 'short_description', 'image', 'add_date'];
}
