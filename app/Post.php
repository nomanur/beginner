<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //protected $fillable = ['title', 'description'];

    protected $guarded = [];

    protected $table = 'post';
}
