<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use Illuminate\Support\Facades\Validator;

class AppointmentController extends Controller
{

    public function index()
    {
        return Appointment::all();
    }
     
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'date' => 'required',
            'hour' => 'required',
            'makeup_id'=> 'required',
            'user_id'=> 'required',

        ]);

        if ($validator->fails()) {
            return [
                'created' => false,
                'errors'  => $validator->errors()->all()
            ];
        }

        Appointment::create($request->all());
    }

 


     
} 
