<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use App\Models\Catalog;
class CatalogController extends Controller
{
    public function catalog()
    {
        $data = Catalog::all();
        $image = Catalog::findOrFail('1')->images;
        return view("pages.catalog", [ 'catalogs' => $data, 'images'=> $image ]);
    }
}
