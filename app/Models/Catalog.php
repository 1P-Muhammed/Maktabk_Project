<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    protected $table = 'catalogs';

    protected $fillable = ['name', 'price', 'discount_price', 'description', 'images'];

    // protected $casts = [
//     'images' => 'array'
// ];
    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
