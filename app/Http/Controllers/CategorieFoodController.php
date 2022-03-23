<?php

namespace App\Http\Controllers;

use App\Models\Met;
use App\Models\MetCategory;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


class CategorieFoodController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }


    protected function validator(array $data)
    {
        return Validator::make($data, [
            'met_categorie_name' => ['required', 'string', 'max:255','unique:met_categories'],
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
        return redirect()->route('listCategory')->with('success'," Categories créer avec succès");
    }

    public function list(){
        $category_met=MetCategory::all();
        return view('admin.menu.listCategory',compact('category_met'));
    }

    public function update(Request $request ,$id){
        
        $category_met=DB::table('met_categories')->where('met_categorie_id',$id)->first();
        $validate=$request->validate([
            'met_categorie_name'=> ['required', 'string', 'max:255',
                              Rule::unique('met_categories')->where(fn ($query) => $query->where('met_categorie_name','!=',$category_met->met_categorie_name)),
                              ],
            'met_categorie_description' => ['required', 'string', 'max:255'],

        ]);
        $categorieUpdate = DB::table('met_categories')
                ->where('met_categorie_id',$id)
                ->update([
                    "met_categorie_name"=>$request->met_categorie_name,
                    "met_categorie_description"=>$request->met_categorie_description,
                ]);

        return redirect()->route('listCategory')->with('success','Categorie mise à jour avec succés');                
    }

    public function delete(Request $request ,$id){
        $mets=Met::where('categorie_met_id',$id)->first();
        if($mets){
            return redirect()->route('listCategory')->with('error', 'Categorie est affecter à un met');
        }
        else{
            $role=DB::table('met_categories')->where('met_categorie_id',$id)->delete();
            return redirect()->route('listCategory')->with('success', 'Categorie supprimer avec succès');
        }
        
    }

}
