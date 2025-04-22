<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TermsOfServiceController extends Controller
{
    public function terms_of_service()
    {
        return view("pages.terms_of_service");
    }
}
