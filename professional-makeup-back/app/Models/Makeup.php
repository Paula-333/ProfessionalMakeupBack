<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Makeup extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function appointment()
    {
        return $this->belongsToMany('App\Appointment');
    }

}
