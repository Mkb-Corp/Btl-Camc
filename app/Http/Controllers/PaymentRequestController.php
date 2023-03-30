<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

use App\Models\PaymentRequest;
use App\Models\File;

class PaymentRequestController extends Controller
{
    /**
     * Payment request details
     */
    public function index(): View
    {
        $files = File::where('state', "NO_SUBMITTED")->get();
        return view('btl_views.payment_request', [
            "files" => $files
        ]);
    }
}
