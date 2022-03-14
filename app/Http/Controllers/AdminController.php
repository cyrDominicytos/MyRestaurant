<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function __construct(){
        //parent::__construct();
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

        //dd(getPermissionById($perm[0]));
        
        /*$roles=DB::table('roles')
        ->join('permission_role','permission_role.role_id','=','roles.role_id')
        ->select('*')
        ->get();*/
        //dd($role);
        return view('show',compact('user','role','perm'));
    }
}
