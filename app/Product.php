<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    protected $fillable = [
        'name',
        'price',
        'type_id',
        'image_url',
        'description'
    ];
}
