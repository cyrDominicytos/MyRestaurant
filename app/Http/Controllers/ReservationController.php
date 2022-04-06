<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReservationController extends Controller
{
    
    public function new(){


        $users=User::all()->where('role_user_id',2);
        return view('admin.reservation.new',compact('users'));
    }
}
