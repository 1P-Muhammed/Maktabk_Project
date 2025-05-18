<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catalog;

class ProductDetailsController extends Controller
{
    public function show($id)
    {
        $product = Catalog::with('images')->findOrFail($id);
        // dd($product); // Finds product by ID or throws 404
        return view('pages.product_details', compact('product'));
    }
}
