<?php

namespace App\Http\Controllers;

use App\AbuseReport;
use App\Http\Requests\ReportAbuseRequest;
use Illuminate\Http\Request;

class ReportAbuseController extends Controller
{
    //
    public function submit(ReportAbuseRequest $request) 
    {
        if ($request->hasFile('media_url')) 
        {
            $report = AbuseReport::create($request->all());

            $fileNameToStore = $request->file('media_url')->getClientOriginalName();
            $ext = $request->file('media_url')->getClientOriginalExtension();


            $path = 'public/images/media/';

            $request->file('media_url')->storeAs($path, $report->id . '_' .$fileNameToStore);

            $report->media_url = $path . $report->id . '_' . $fileNameToStore;


            $report->save();
            
            return response()->json([
                'message' => 'Case added'
            ]);
        }
    }
}
