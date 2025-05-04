<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catalog;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('q');

        $catalogs = Catalog::where('name', 'like', '%' . $query . '%')->get();

        return view('pages.search', ['catalogs' => $catalogs, 'query' => $query]);
    }
}