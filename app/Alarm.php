<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alarm extends Model
{
    //
    protected $fillable = ['alarm', 'user_id'];
}
