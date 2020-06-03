<?php

namespace App\Http\Controllers;

use App\Alarm;
use App\Http\Requests\CreateAlarmRequest;
use Illuminate\Http\Request;

class AlarmController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth:api');
    }
    public function create(CreateAlarmRequest $request)
    {
        if ($request->hasFile('alarm')) 
        {
            $user_id = auth('api')->user()->id;

            $alarm = Alarm::create([
                'user_id' => $user_id,
                'alarm' => $request->alarm
            ]);

            $fileNameToStore = $request->file('alarm')->getClientOriginalName();
            $ext = $request->file('alarm')->getClientOriginalExtension();


            $path = 'public/images/media/alarms';

            $request->file('alarm')->storeAs($path, $alarm->id . '_' .$fileNameToStore);

            $alarm->alarm = $path . $alarm->id . '_' . $fileNameToStore;


            $alarm->save();
            
            return response()->json([
                'message' => 'Alarm created'
            ], 201);
        }
    }
}
