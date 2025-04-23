<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    protected $fillable = ['name', 'price', 'discount_price', 'discription'] ;
    public function images()
    {
        return $this->hasMany(Image::class);
    }
}