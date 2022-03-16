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

        $permission=Permission::create(["permission_name"=>"consule_user","permission_module"=>"user","permission_description"=>" gestion des employés"]);
        $permission=Permission::create(["permission_name"=>"creer_user","permission_module"=>"user","permission_description"=>" gestion des employés"]);
        $permission=Permission::create(["permission_name"=>"effacer_user","permission_module"=>"user","permission_description"=>" gestion des employés"]);
        $permission=Permission::create(["permission_name"=>"supprimer_user","permission_module"=>"user","permission_description"=>" gestion des employés"]);


        $permission=Permission::create(["permission_name"=>"consule_vente","permission_module"=>"vente","permission_description"=>" gestion des ventes"]);
        $permission=Permission::create(["permission_name"=>"creer_vente","permission_module"=>"vente","permission_description"=>" gestion des ventes"]);
        $permission=Permission::create(["permission_name"=>"effacer_vente","permission_module"=>"vente","permission_description"=>" gestion des ventes"]);
        $permission=Permission::create(["permission_name"=>"supprimer_vente","permission_module"=>"vente","permission_description"=>" gestion des ventes"]);

        // $permission=Permission::create(["permission_name"=>"consule_comptable","permission_module"=>"user","permission_description"=>" gestion des employés"]);
        // $permission=Permission::create(["permission_name"=>"creer_comptable","permission_module"=>"user","permission_description"=>" gestion des employés"]);
        // $permission=Permission::create(["permission_name"=>"effacer_comptable","permission_module"=>"user","permission_description"=>" gestion des employés"]);
        // $permission=Permission::create(["permission_name"=>"supprimer_comptable","permission_module"=>"user","permission_description"=>" gestion des employés"]);

        // $permission=Permission::create(["permission_name"=>"consule_livreur","permission_module"=>"user","permission_description"=>" gestion des employés"]);
        // $permission=Permission::create(["permission_name"=>"creer_livreur","permission_module"=>"user","permission_description"=>" gestion des employés"]);
        // $permission=Permission::create(["permission_name"=>"effacer_livreur","permission_module"=>"user","permission_description"=>" gestion des employés"]);
        // $permission=Permission::create(["permission_name"=>"supprimer_livreur","permission_module"=>"user","permission_description"=>" gestion des employés"]);

        // $permission=Permission::create(["permission_name"=>"consule_caissier","permission_module"=>"user","permission_description"=>" gestion des employés"]);
        // $permission=Permission::create(["permission_name"=>"creer_caissier","permission_module"=>"user","permission_description"=>" gestion des employés"]);
        // $permission=Permission::create(["permission_name"=>"effacer_caissier","permission_module"=>"user","permission_description"=>" gestion des employés"]);
        // $permission=Permission::create(["permission_name"=>"supprimer_caissier","permission_module"=>"user","permission_description"=>" gestion des employés"]);


        // $permission=Permission::create(["permission_name"=>"consule_serveur","permission_module"=>"user","permission_description"=>" gestion des employés"]);
        // $permission=Permission::create(["permission_name"=>"creer_serveur","permission_module"=>"user","permission_description"=>" gestion des employés"]);
        // $permission=Permission::create(["permission_name"=>"effacer_serveur","permission_module"=>"user","permission_description"=>" gestion des employés"]);
        // $permission=Permission::create(["permission_name"=>"supprimer_serveur","permission_module"=>"user","permission_description"=>" gestion des employés"]);


        // $permission=Permission::create(["permission_name"=>"commande_livreur","permission_module"=>"livraison","permission_description"=>" gestion des clients"]);
        // $permission=Permission::create(["permission_name"=>"livraison_disponible","permission_module"=>"livraisson","permission_description"=>" gestion des clients"]);


        // $permission=Permission::create(["permission_name"=>"affiche_table_disponible","permission_module"=>"gerant","permission_description"=>" gestion des employés"]);
        // $permission=Permission::create(["permission_name"=>"affecter_table_client","permission_module"=>"gerant","permission_description"=>" gestion des employés"]);
        // $permission=Permission::create(["permission_name"=>"affecter_table_serveur","permission_module"=>"gerant","permission_description"=>" gestion des employés"]);

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
        $user=User::create(["firstname"=>"John", "lastname"=>"Doe","email"=>"oloucholapatrick@gmail.com","password"=>Hash::make("12345678"),"role_user_id"=>1]);


    // $table->unsignedBigInteger('role_id');
    // $table->json('permission_list');
    // $table->timestamps();
    }
}
