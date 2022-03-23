<?php

namespace App\Http\Controllers;

use App\Models\Met;
use App\Models\MetCategory;
use Illuminate\Http\Request;
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
            'met_categorie_name' => ['required', 'string', 'max:255'],
            'met_categorie_description' => ['required', 'string', 'max:255'],
        ]);
    }
    public function show($id=null){
        $category_met=DB::table('met_categories')->where('met_categorie_id',$id)->first();
        if($id!=null && !$category_met){
                return redirect()->route('listCategory')->with('error',"Cette Categories n'existe pas");
            }
        return view('admin.menu.newCategory',compact('category_met'));
    }

    public function create(Request $request){
        $this->validator($request->all())->validate();
        $category = new MetCategory();
        $category->met_categorie_name=$request['met_categorie_name'];
        $category->met_categorie_description=$request['met_categorie_description'];
        $category->save();
        return redirect()->route('listCategory')->with('success'," Categories créer avec succes");
    }

    public function list(){
        $category_met=MetCategory::all();
        return view('admin.menu.listCategory',compact('category_met'));
    }

    public function update(Request $request ,$id){
        $category_met=DB::table('met_categories')->where('met_categorie_id',$id)->first();
        if(!$category_me){
            return redirect()->route('listCategory')->with('error',"Cette Categories n'existe pas");
        }
        return view('admin.menu.newCategory',compact('category_met'));
    }

    public function delete($id){
        $mets=Met::all();
        foreach($mets as $met){
            if($id == $met->categorie_met_id){
              return redirect()->route('listRole')->with('error', 'La categorie est affecter à un met');
            }
            else{
                $role=DB::table('met_categories')->where('met_categorie_id',$id)->delete();
                return redirect()->route('listRole')->with('success', 'user is successfully deleted');
            }
        }
    }
}
