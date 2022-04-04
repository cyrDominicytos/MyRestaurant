<?php

namespace App\Models;

use App\Models\Permission;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Role extends Model
{
    use HasFactory;
    use Sluggable;
    protected $fillable=[
        'role_name',
        'role_description',
        'role_slug'
    ];
    
    public function permissions() {

        $result =DB::table('permission_role')->where('role_id', $this->role_id)->first();
        if($result) 
            return $result->permission_list;
        return null;
    } 
}



