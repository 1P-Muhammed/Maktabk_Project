<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RefundPolicyController extends Controller
{
    public function refund_policy()
    {
        return view("pages.refund_policy");
    }
}