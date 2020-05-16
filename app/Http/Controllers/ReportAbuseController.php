<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportAbuseController extends Controller
{
    //
    public function submit(Request $request) 
    {
        $request->validate([
            'description' => 'required',
            'media' => 'required'
        ]);

    
    }
}
