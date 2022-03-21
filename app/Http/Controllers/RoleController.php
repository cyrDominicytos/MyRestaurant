<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class RoleController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function showRole(){
        $roles=Role::all();
        return view('admin.listRole',compact('roles'));
    }
    public function newRole(){
        return view('admin.newRole');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'slug' => ['required', 'string', 'max:255',],
            'permission'=>['required',],
        ]);
    }

    public function createRole(Request $request){
        
        $this->validator($request->all())->validate();
        $roles=new Role();
        $roles->role_name=$request['name'];
        $roles->role_description=$request['description'];
        $roles->role_slug=$request['slug'];
        $roles->save();
        $permi_role=DB::table('permission_role')->insert([
            "role_id"=>$roles->id,
            "permission_list"=>json_encode($request->permission)
        ]);
         return redirect()->route('listRole')->with('success','Role is successfully create');
    }

    public function edit($id){
        
        $role=DB::table('roles')->where('role_id',$id)->first();
        if(!$role){
            return redirect()->route('listRole')->with('error',"Ce role n'existe pas");
        }
        $assign_permission_list=rolePermission($id);
        return view('admin.editRole',compact('role','assign_permission_list'));
    }

    public function updateRole(Request $request,$id){

        $this->validator($request->all())->validate();
        $roleUpdate = DB::table('roles')
                ->where('role_id',$id)
                ->update([
                    "role_name"=>$request->name,
                    "role_slug"=>$request->slug,
                    "role_description"=>$request->description
                ]);
        $permi_role_update=DB::table('permission_role')
                ->where('role_id',$id)
                ->update([
                    "permission_list"=>json_encode($request->permission)
                ]);

        return redirect()->route('listRole')->with('success', 'Role is successfully update');        
    }

    public function delete(Request $request,$id){

        $user=User::all();
        foreach($user as $rols){
            if($id == $rols->role_user_id){
              return redirect()->route('listRole')->with('error', 'user is affected by this role');
            }
            else{
                $role=DB::table('roles')->where('role_id',$id)->delete();
                return redirect()->route('listRole')->with('success', 'user is successfully deleted');
            }
        }
        
        
    }
}
