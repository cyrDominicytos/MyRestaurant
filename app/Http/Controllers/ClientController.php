<?php

namespace App\Http\Controllers;

use App\Models\Met;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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

        $this->validator($request->all())->validate();
        $user=new User();
        $user->firstname=$request['firstname'];
        $user->lastname=$request['lastname'];
        $user->phone_number=$request['phone_number'];
        $user->email=$request['email'];
        $user->password=Hash::make($request['password']);
        $user->role_user_id=2;
        $user->save();
        return redirect()->route('index_client')->with('success', 'client is successfully create');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('index_client');
    }
}
