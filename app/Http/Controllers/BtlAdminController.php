<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class BtlAdminController extends Controller
{
    public function index():View
    {
        return view('btl_views.home');
    }
}
