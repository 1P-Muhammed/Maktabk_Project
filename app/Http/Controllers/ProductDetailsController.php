<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductDetailsController extends Controller
{
    public function product_details()
    {
        return view("pages.product_details");
    }
}
