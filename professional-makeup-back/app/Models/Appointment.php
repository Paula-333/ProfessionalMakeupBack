<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'date',
        'hour',
        'makeup',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function makeup()
    {
        return $this->belongsToMany('App\Makeup');
    }

}
