<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use App\Models\Permission;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // \App\Models\User::factory(10)->create();
        $roles=Role::create(["role_name"=>"Adminstrateur","role_description"=>"utilisateur ayants le droit d'ajouter les employés","role_slug"=>"super_admin"]);
        $permission=Permission::create(["permission_name"=>"créer un employé","permission_module"=>"user","permission_description"=>" gestion des employés"]);
        $permission=Permission::create(["permission_name"=>"créer un gérant","permission_module"=>"user","permission_description"=>" gestion des employés"]);
        $permission=Permission::create(["permission_name"=>"créer un caissier","permission_module"=>"user","permission_description"=>" gestion des employés"]);
        $permission=Permission::create(["permission_name"=>"créer un comptable","permission_module"=>"user","permission_description"=>" gestion des employés"]);
        $permlis=$permission->permission_id;
        $permi_role=DB::table('permission_role')->insert([
            "role_id"=>1,
            "permission_list"=>json_encode(
                ['1',
                '2',
                '3',
                '4']
                )
        ]);
        $user=User::create(["firstname"=>"John", "lastname"=>"Doe","email"=>"restaurant@gmail.com","password"=>Hash::make("12345678"),"role_id"=>1]);


    // $table->unsignedBigInteger('role_id');
    // $table->json('permission_list');
    // $table->timestamps();
    }
}
