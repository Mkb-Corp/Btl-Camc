<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

use App\Models\File;

class FileController extends Controller
{
    /**
     * Show all files
     */
    public function index(): View
    {
        $files = File::where('state', "NO_SUBMITTED")->get();

        return view('welcome', [
            'files' => $files
        ]);
    }

    /**
     * Create a file
     */
    public function create(Request $request)
    {
        $request->validate([
            'file_reference' => 'required',
            'client' => 'required',
            'ref_camion' => 'required',
            'amount' => 'required',
            'currency' => 'required',
        ]);

        File::create($request->post());

        return redirect()->route('all_files');
    }

    /**
     * Change files state to submitted
     */
    public function update_files_state()
    {
        $files = File::where('state', "NO_SUBMITTED");
        foreach ($files as $file) {
            $file->state = 'SUBMITTED';
        }

        return true;
    }

    /**
     * Submitted
     */

     public function submitted():View
     {
        $files = File::where('state', 'SUBMITTED')->get();

        return view("camc.payment_requests", [
            "files" => $files
        ]);
     }
}
