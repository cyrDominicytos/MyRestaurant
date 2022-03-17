<?php

use App\Models\Role;
use App\Models\Permission;
use Illuminate\Support\Facades\DB;

if(!function_exists('getPermissionById')){
    function getPermissionById($id){
       $modelPermission=new Permission();
       $result=$modelPermission->where('permission_id',$id)->first();
       return $result;
    }
    
}

if(!function_exists('rolePermission')){
    function rolePermission($id){
        $permi_role=DB::table('permission_role')->where('role_id',$id)->first();
        $permission=json_decode($permi_role->permission_list);
        foreach($permission as $perm){
           $rolePerm=getPermissionById($perm)->permission_name;
        }
        return $rolePerm;
    }
}

if(!function_exists('permissionModule')){
    
    function permissionModule(){
          $temp=[]; $perm=[]; $index="";
          $permissions=Permission::all();
          foreach($permissions as $permission){
            if($index==$permission->permission_module || $index=="")
            {
                 $index=$permission->permission_module;
                 $temp[count($temp)]=$permission;
                 
            }else{
                $perm[$index]=$temp;
                $temp=[];
                $index=$permission->permission_module;
                $temp[count($temp)]=$permission;
                
            }
          }
          $perm[$index]=$temp;
          return $perm; 
    }

}
