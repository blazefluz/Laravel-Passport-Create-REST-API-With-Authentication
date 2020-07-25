<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Product extends Model
{
   use Sluggable;

   protected $fillable = [
       'name', 'price', 'slug',
    ];

    public function sluggable(){
        return [
            'slug' => [
                'source' => 'name'
         ]
    ];
    }
}
