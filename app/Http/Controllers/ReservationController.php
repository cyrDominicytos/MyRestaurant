<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReservationController extends Controller
{
    
    public function new(){
        $users=User::all()->where('role_user_id',2);
        return view('admin.reservation.new',compact('users'));
    }

    public function store(Request $request){
         $request->validate([
            "reservation_people"=>['required', 'numeric',],
            "reservation_days"=> ['required','date_format:Y-m-d\TH:i',],
            "reservation_datail"=>['required', 'string', 'max:255'],
            "reservation_type"=>['required', 'string', 'max:255'],
         ]);
         $reservation=new Reservation();
         $reservation->reservation_people=$request->reservation_people;
         $reservation->reservation_days=$request->reservation_days;
         $reservation->reservation_datail=$request->reservation_datail;
         $reservation->reservation_type=$request->reservation_type;
         $reservation->reservation_user_id=$request->reservation_user_id;
         $reservation->save();

         return redirect()->route('listReservation')->with('success','Reservation creér avec succès');
    }

    public function index(){
        $reservation=Reservation::all();
        return view('admin.reservation.list',compact('reservation'));
    }

    public function publish($id){
      $reservationUpdate = DB::table('reservations')
      ->where('reservation_id',$id)
      ->update([
          "reservation_status"=>true,
      ]);
      return redirect()->route('listReservation')->with('success','Reservation valider avec succès');
    }

    public function delete($id){
        $reservation=DB::table('reservations')->where('reservation_id',$id)->delete();
        return redirect()->route('listReservation')->with('success', 'Reservation supprimer avec succès');
    }

}
