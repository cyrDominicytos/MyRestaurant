<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function __construct(){
        //parent::__construct();
    }



    protected function validator(array $data)
    {
        return Validator::make($data, [
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'phone_number' => ['required', 'string', 'max:255',],
            'email' => ['required', 'string','email', 'max:255',],
            'origin' => ['required', 'string', 'max:255',],
            'adress' => ['required', 'string', 'max:255',],
            'birthday'=> ['required', 'date'],
            'password' => ['required', 'string', 'max:255','min:8'],
            'password_confirmation'=> ['required', 'string', 'max:255','min:6|required_with:password|same:password','min:8'],
            
        ]);
    }
    
    public function show(){
        $roleModel= new Role();
        $user = User::all();
        $role=Role::all();
        //dd($roleModel->get());
        $perol=$roleModel->get();
        //dd($perol[0]->permissions());
        $permrole=json_decode($perol[0]->permissions());
        //dd(count($permrole));
         
        $tbl =getPermissionById($permrole[1]);
       // dd($tbl);
        //dd($role[0]->permissions());
        $perm = json_decode($role[0]->permissions());
        $permissions=permissionModule();
        //dd(getPermissionById($perm[0]));
        
        /*$roles=DB::table('roles')
        ->join('permission_role','permission_role.role_id','=','roles.role_id')
        ->select('*')
        ->get();*/
        //dd($role);
        return view('show',compact('user','role','perm'));
    }
     
    public function showUser(){
        $roles=Role::all();
        return view('admin.newCLient',compact('roles'));
    }
    public function createUser(Request $request){
        // dd($request->all());
        $this->validator($request->all())->validate();
        $user=User::create([
            "firstname"=>$request->firstname,
            "lastname"=>$request->lastname,
            "phone_number"=>$request->phone_number,
            "email"=>$request->email,
            "origin"=>$request->origin,
            "adress"=>$request->adress,
            "birthday"=>$request->birthday,
            "password"=>Hash::make($request->password),
            "sex"=>$request->sex,
            "role_user_id"=>$request->role,
        ]);

         return redirect()->route('home');
    }
}


        // $this->validator($request->all())->validate();
            //     $validate=$request->validate([
    //         "username"=>"required",
    //         "card_number"=>"required",
    //         "mm"=>"required|numeric",
    //         "yy"=>"required|numeric",
    //         "cvv"=>"required",
    //     ]);
    //   if (!$validate) {
    //     return back()->withErrors($validate)->withInput();
    //   }
    //   $ptm=new Portemonnaie($request->all());
    //   $ptm->total_buy_price=$total_buy_price;
    //   $ptm->username=$request->username;
    //   $ptm->card_number=$request->card_number;
    //   $ptm->cvv=$request->cvv;
    //   $ptm->waiting_price=$waiting_price;
    //   $ptm->expiration=$request->mm."/".$request->yy;
    //   $ptm->total_account=100000;
    //   $ptm->id_client=$id_client;
    //  $ptm->save();