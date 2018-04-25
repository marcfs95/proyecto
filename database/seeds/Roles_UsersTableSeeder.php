<?php

use Illuminate\Database\Seeder;

class Roles_UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('role_user')->delete();

        //administrador de proyecto
        DB::table('role_user')->insert([
            'role_id' => 1,
            'user_id' => 1
        ]);

        //usuario
        DB::table('role_user')->insert([
            'role_id' => 2,
            'user_id' => 2
        ]);

        //cliente
        DB::table('role_user')->insert([
            'role_id' => 4,
            'user_id' => 3
        ]);
    }
}
