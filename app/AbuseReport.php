<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AbuseReport extends Model
{
    //
    protected $fillable = ['name', 'email', 'phone_number', 'location', 'description', 'media_url'];
}
