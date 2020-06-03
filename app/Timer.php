<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Timer extends Model
{
    //
    protected $fillable = ['name', 'start_time', 'repeat_interval', 'repeat_type',
                          'active', 'alarm_id', 'user_id'];
}
