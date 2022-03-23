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
        return $permission;
    }
}

// if(!function_exists('permissionEdit')){
//     function permissionEdit($arry){
//         $index="";$temp=[];$perm_edit=[];
//        foreach($arry as $per){
//           if($index==getPermissionById($per)->permission_module || $index==''){
//              $index=getPermissionById($per)->permission_module;
//              $temp[count($temp)]=$per;
//           }else{
//             $perm_edit[$index]=$temp;
//             $temp=[];
//             $index=getPermissionById($per)->permission_module;
//             $temp[count($temp)]=$per;
//           }
//        }
//        $perm_edit[$index]=$temp;
//        return $perm_edit;
//     }
// }

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

if(!function_exists('metType')){
    function metType(){
        $type=array("1"=>"Entrées", "2"=>"Resistant", "3"=>"Deserts");
        return $type;
    }
}

if(!function_exists('metJour')){
    function metJour(){
        $jour=array("1"=>"Lundi", "2"=>"Mardi", "3"=>"Mercredi","4"=>"Jeudi","5"=>"Vendredi","6"=>"Samedi","7"=>"Dimanche");
        return $jour;
    }
}
