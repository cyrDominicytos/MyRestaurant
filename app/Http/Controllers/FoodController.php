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
            'met_price' => ['required', 'numeric','regex:/^\d+(\.\d{1,2})?$/',], 
            'met_description' => ['required', 'string', 'max:255'],
            'met_image'=>['required', 'image','mimes:jpeg,png,jpg,gif,svg|max:2048',],
            'met_status'=>['required', 'integer'],
            'met_type'=>['required', 'integer',],
            'category'=>['required','integer'],
        ]);

        // 'imageFile' => 'required',
        // 'imageFile.*' => 'mimes:jpeg,jpg,png,gif|max:2048'
        // 'file' => 'required|mimes:png,jpg,jpeg,csv,txt,xlx,xls,pdf|max:2048'
        // 'imageUpload' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    }
    public function show(){
        $category=MetCategory::all();
        return view('admin.menu.newFood',compact('category'));
    }

    public function create(Request $request){
        

        // $filename=$imageName.'.'.$request->imageUpload->extension(); 
        // $path=$request->imageUpload->move(
        //     'assets/img',
        //     $filename,
        // );
     $this->validator($request->all())->validate();

     $filename=$request->met_image->getClientOriginalName();
     $path=$request->met_image->storeAs('images',$filename,'public');
     $met=new Met();
     $met->met_name=$request->met_name;
     $met->met_price=$request->met_price;
     $met->met_description=$request->met_description;
     $met->met_image=$path;
     $met->met_status=$request->met_status;
     $met->met_type=$request->met_type;
     $met->categorie_met_id=$request->categorie_met_id;


     return redirect()->route('listFood')->with('success','Met creér avec succès');
    }
}
