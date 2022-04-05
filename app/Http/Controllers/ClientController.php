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

    public function create(Request $request){
        
    }
}
