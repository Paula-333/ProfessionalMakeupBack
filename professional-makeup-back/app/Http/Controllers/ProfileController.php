<?php

namespace App\Http\Controllers ;

use App\Models\Appointment;
//use phpDocumentor\Reflection\Types\Integer as TypesInteger;
//use Illuminate\Support\Facades\Integer;
//use Illuminate\Http\Request;
//use App\Models\User;

class ProfileController extends Controller
{
    public function getProfile($id)
  
    {
        $profile = Appointment::join('users','users.id', '=', 'appointment.user_id')
            ->join('makeup','appointment.makeup_id', '=', 'makeup.id')
            ->where('users.id', '=', $id)
            ->select('users.name', 'appointment.date', 'appointment.hour', 'makeup.makeup_name')
            ->get();
        return $profile;

    }

}
