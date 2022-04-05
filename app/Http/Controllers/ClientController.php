<?php

namespace App\Http\Controllers;

use App\Models\Met;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    

    public function index(){

        $foods=Met::all();
        return view('client.home',compact('foods'));
    }


    protected function validator(array $data)
    {
        return Validator::make($data, [
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255',],
            'phone_number' => ['required', 'string', 'max:255','unique:users'],
            'email' => ['required', 'string','email', 'max:255','unique:users','regex:/^.+@.+$/i',],
            'password' => ['required', 'string', 'min:8',],
            'password_confirmation' => ['required','same:password','min:8'],
        ]);
    }
    public function create(Request $request){

        dd($request->all());

    }
}
