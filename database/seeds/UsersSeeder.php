<?php

use Illuminate\Database\Seeder;

use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "email"     => "admin@admin.com",
            "name"      => "Administrador",
            "password"  => Hash::make("administrador")
        ]);
    }
}
