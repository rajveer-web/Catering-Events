<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    public $fillable = ['name', 'detail', 'description', 'price', 'image'];
}
