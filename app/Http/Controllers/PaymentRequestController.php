<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

use App\Models\PaymentRequest;
use App\Models\File;
use App\Models\FileToPaymentRequest;

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

    /**
     * Create Payment Request
     */
    public function create(Request $request)
    {
        if (File::where('state', "NO_SUBMITTED")->count() > 0) {
            $payment_request = PaymentRequest::create([
                "state" => "SUBMITTED"
            ]);
            $files = File::where('state', "NO_SUBMITTED")->get();
            foreach ($files as $file) {
                FileToPaymentRequest::create([
                    'file_id' => $file->id,
                    'payment_request_id' => $payment_request->id
                ]);
            }
            $files = File::where('state', "NO_SUBMITTED")->update(["state" => "SUBMITTED"]);
        }

        return redirect()->route('all_files');
    }

    /**
     * SUbmitted payment request
     */
    public function submitted():View
    {
        $data = PaymentRequest::where('state','SUBMITTED')->get();

        return view('camc.payment_requests', [
            'requests' => $data
        ]);
    }

    /**
     * Validate
     */
    public function payment_validation(Request $request)
    {
        dump($request);
    }
    
}
