<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrivacyPolicyController extends Controller
{
    public function privacy_policy()
    {
        return view("pages.privacy_policy");
    }
}
