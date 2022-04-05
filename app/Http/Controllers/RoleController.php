<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Cviebrock\EloquentSluggable\Services\SlugService;

class RoleController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function showRole(){
        $roles=Role::all()->where('role_name','!=','Client');
        return view('admin.listRole',compact('roles'));
    }
    public function newRole(){
        return view('admin.newRole');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'role_name' => ['required', 'string', 'max:255','unique:roles'],
            'role_description' => ['required', 'string', 'max:255'],
            'role_slug' => ['required', 'string', 'max:255','unique:roles'],
            'permission'=>['required'],
        ]);
    }

    public function createRole(Request $request){
        $this->validator($request->all())->validate();
        $roles=new Role();
        $roles->role_name=$request['role_name'];
        $roles->role_description=$request['role_description'];
        $roles->role_slug=$request['role_slug'];
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
        $role=DB::table('roles')->where('role_id',$id)->first();
        $validate=$request->validate([
            'role_name'=> ['required', 'string', 'max:255',
                              Rule::unique('roles')->where(fn ($query) => $query->where('role_name','!=',$role->role_name)),
                              ],
            'role_description' => ['required', 'string', 'max:255'],
            'role_slug' => ['required', 'string', 'max:255','unique:roles,role_id'.$role->role_slug],
            'permission'=>['required'],

        ]);
        $roleUpdate = DB::table('roles')
                ->where('role_id',$id)
                ->update([
                    "role_name"=>$request->role_name,
                    "role_slug"=>$request->role_slug,
                    "role_description"=>$request->role_description
                ]);
        $permi_role_update=DB::table('permission_role')
                ->where('role_id',$id)
                ->update([
                    "permission_list"=>json_encode($request->permission)
                ]);

        return redirect()->route('listRole')->with('success', 'Role is successfully update');        
    }

    public function delete(Request $request,$id){


        $user=User::where('role_user_id',$id)->first();
        if($user){
            return redirect()->route('listRole')->with('error', 'user is affected by this role');
        }else{
            $role=DB::table('roles')->where('role_id',$id)->delete();
            return redirect()->route('listRole')->with('success', 'user is successfully deleted');
        }
        
    }
    
    public function createSlug(Request $request){
        $slug=Str::slug(request('role_name'));
        return response()->json(['slug' => $slug]);
    }
}
