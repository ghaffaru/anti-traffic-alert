<?php

namespace App\Http\Controllers;

use App\Alarm;
use App\Http\Requests\CreateAlarmRequest;
use App\Http\Resources\AlarmsResource;
use Illuminate\Http\Request;

class AlarmController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function index()
    {
        $alarms = auth('api')->user()->alarms;

        
        return AlarmsResource::collection($alarms);
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


            $path = 'public/tunes/';

            $request->file('alarm')->storeAs($path, $alarm->id . '_' .$fileNameToStore);

            $alarm->alarm = 'storage/' .  $path . $alarm->id . '_' . $fileNameToStore;


            $alarm->save();
            
            return response()->json([
                'message' => 'Alarm created'
            ], 201);
        }
    }
}
