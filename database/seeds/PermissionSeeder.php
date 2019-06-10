<?php

use Illuminate\Database\Seeder;

//models
use Spatie\Permission\Models\Permission; 

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permisos = [
            "user_admin",
            "user_create",
            "user_read",
            "user_update",
            "user_delete",
            "role_create",
            "role_read",
            "role_update",
            "role_delete",
            "role_asign",
            "permission_create",
            "permission_read",
            "permission_update",
            "permission_delete",
            "permission_asign",
        ];
        foreach ($permisos as $permiso) {
            Permission::create([
                "name"=>$permiso,
                "guard_name"=>"web",
            ]);
            /*
            DB::table('permissions')->insert([
                "name"=>$permiso,
                "guard_name"=>"web",
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
            ]);
            */
        }
    }
}
