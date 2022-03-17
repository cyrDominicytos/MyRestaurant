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
            'lastname' => ['required', 'string', 'max:255','unique:users'],
            'phone_number' => ['required', 'string', 'max:255',],
            'email' => ['required', 'string','email', 'max:255',],
            'origin' => ['required', 'string', 'max:255',],
            'adress' => ['required', 'string', 'max:255',],
            'birthday'=> ['required', 'date'],
            
        ]);
    }
    
    public function new(){
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

    public function show(){
      $users=User::all();
      return view('admin.list',compact('users'));
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

    public function edit($id){
        $user = User::findOrFail($id);
        return view('admin.editClient', compact('user'));
    }

    public function destroy($id){
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('list')->with('success', 'user is successfully deleted');
    }

    public function update(Request $request ,$id){
        $this->validator($request->all())->validate();
        $user= User::whereId($id)->update([
            "firstname"=>$request->firstname,
            "lastname"=>$request->lastname,
            "phone_number"=>$request->phone_number,
            "email"=>$request->email,
            "origin"=>$request->origin,
            "adress"=>$request->adress,
            "birthday"=>$request->birthday,
            "sex"=>$request->sex,
            "role_user_id"=>$request->role,
        ]);
        return redirect()->route('list');
    }
}
