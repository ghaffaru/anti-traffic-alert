<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTimerRequest;
use App\Timer;
use Illuminate\Http\Request;

class TimerController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function index()
    {
        
    }

    public function create(CreateTimerRequest $request)
    {
        $user_id = auth('api')->user()->id;

        $timer = Timer::create([
            'name' => $request->name,
            'start_time' => $request->start_time,
            'repeat_interval' => $request->repeat_interval,
            'repeat_type' => $request->repeat_type,
            'active' => $request->active,
            'alarm_id' => $request->alarm_id,
            'user_id' => $user_id
        ]);

        return response()->json([
            'message' => 'timer created',
            'timer' => $timer
        ]);
    }

    
}
