<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    public function test($value)
    {
        echo $value;
    }
}
