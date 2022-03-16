<?php

use App\Models\Role;
use App\Models\Permission;

if(!function_exists('getPermissionById')){
    function getPermissionById($id){
       $modelPermission=new Permission();
       $result=$modelPermission->where('permission_id',$id)->first();
       return $result;
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
