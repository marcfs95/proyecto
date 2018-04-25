<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->delete();

        DB::table('roles')->insert([
            'name' => 'administrador',
            'description' => 'Administrador de proyecto'
        ]);
        DB::table('roles')->insert([
            'name' => 'maquetador',
            'description' => 'Maquetador de proyecto'
        ]);
        DB::table('roles')->insert([
            'name' => 'programador',
            'description' => 'Programador de proyecto'
        ]);
        DB::table('roles')->insert([
            'name' => 'cliente',
            'description' => 'Cliente del proyecto'
        ]);
    }
}
