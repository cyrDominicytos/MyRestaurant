<?php

namespace App\Http\Controllers;

use App\Models\Met;
use App\Models\MetCategory;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class FoodController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }


    protected function validator(array $data)
    {
        return Validator::make($data, [
            'met_name' => ['required', 'string', 'max:255','unique:mets'],
            'met_price' => ['required', 'string', 'max:255'], 
            'met_description' => ['required', 'string', 'max:255'],
            'met_image'=>['required', 'string', 'max:255'],
            'met_status'=>['required', 'string', 'max:255'],
            'met_type'=>['required', 'string', 'max:255'],
            'category'=>['required', 'string', 'max:255'],
        ]);
    }
    public function show(){
        $category=MetCategory::all();
        return view('admin.menu.newFood',compact('category'));
    }

    public function create(){
     $this->validator($request->all())->validate();
     return redirect()->route('listFood')->with('success','Met creér avec succès');
    }
}
