<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cart()
    {
        return view("pages.cart");
    }
    public function cart2()
    {
        return view("pages.cart2");
    }
}