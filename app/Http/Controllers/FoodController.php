<?php

namespace App\Http\Controllers;

use App\Models\Met;
use App\Models\MenuDay;
use Illuminate\Http\File;
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
            'categorie_met_id'=>['required','integer'],
        ]);

        // 'imageFile' => 'required',
        // 'imageFile.*' => 'mimes:jpeg,jpg,png,gif|max:2048'
        // 'file' => 'required|mimes:png,jpg,jpeg,csv,txt,xlx,xls,pdf|max:2048'
        // 'imageUpload' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    }
    public function show($id=null){
        $category=MetCategory::all();
        $met=DB::table('mets')
            ->join('met_categories','met_categories.met_categorie_id','=','mets.categorie_met_id')
            ->where('met_id',$id)
            ->select('mets.*','met_categories.*')
            ->first();
        if($id!=null && !$met){
                return redirect()->route('listMenuFood')->with('error',"Cet met n'existe pas");
            }
        return view('admin.menu.newFood',compact('category','met'));
    }

    public function create(Request $request){
        
     $this->validator($request->all())->validate();

     $filename=$request->met_image->getClientOriginalName();
     $path=$request->met_image->storeAs('images',$filename,'public');
     $met=new Met();
     $met->met_name=$request->met_name;
     $met->met_price=$request->met_price;
     $met->met_description=$request->met_description;
     $met->met_image=$path;
     $met->met_status=$request->met_status;
     $met->categorie_met_id=$request->categorie_met_id;
     $met->save();
  
     return redirect()->route('listFood')->with('success','Met creér avec succès');
    }
    
    public function lisFood(){
        $foods=Met::all();
        return view('admin.menu.listFood',compact('foods'));
    }
    public function lisFoodMenu(){
        $foods=Met::all();
        return view('admin.menu.listMenuFood',compact('foods'));
    }

    public function update(Request $request, $id){


        if($request->met_image!=null){
            $filename=$request->met_image->getClientOriginalName();
            $path=$request->met_image->storeAs('images',$filename,'public');
        }


        $met=DB::table('mets')->where('met_id',$id)->first();
        $validate=$request->validate([
            'met_name'=> ['required', 'string', 'max:255',
                              Rule::unique('mets')->where(fn ($query) => $query->where('met_name','!=',$met->met_name)),
                              ],
            'met_price' => ['required', 'numeric','regex:/^\d+(\.\d{1,2})?$/',], 
            'met_description' => ['required', 'string', 'max:255'],
            'met_image'=>['required', 'image','mimes:jpeg,png,jpg,gif,svg|max:2048',],
            'met_status'=>['required', 'integer'],
            'categorie_met_id'=>['required','integer'],

        ]);
        $categorieUpdate = DB::table('mets')
                ->where('met_id',$id)
                ->update([
                    "met_name"=>$request->met_name,
                    "met_description"=>$request->met_description,
                    "met_price"=>$request->met_price,
                    "met_image"=>$request->met_image!=null ? $path : $met->met_image,
                    "met_status"=>$request->met_status,
                    "categorie_met_id"=>$request->categorie_met_id,

                ]);
                

        return redirect()->route('listMenuFood')->with('success','Categorie mise à jour avec succés');
    }

    public function delete($id){
       $met=DB::table('mets')->where('met_id',$id)->delete();
       return redirect()->route('listMenuFood')->with('success', 'Met supprimer avec succès');
    }


    // create menu Food

    public function menuFood(){
        $mets=Met::all();
        return view('admin.menu.newMenuDay',compact('mets'));
    }

    public function storeMenuFood(Request $request){
       
        foreach($request->get('food') as $key=>$food){
            $menuday=new MenuDay();
            $menuday->met_menu_days_id=$request->get('food')[$key];
            $menuday->type_met=$request->get('typemet')[$key];
            $menuday->type_days=$request->get('jour')[$key];
            $menuday->save();
        }
        return redirect()->route('listmenuday')->with('succes','Menu du jour ajouter avec succès');
    }

    public function listMenuDay(){
        
        //dd($listmenufood); 
        $result = menuFoodAll();
        return view('admin.menu.listMenuDay',compact('result'));
    }
}
