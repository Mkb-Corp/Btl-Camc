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
        $files = File::all();

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
}
