<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->delete();

        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('1234'),
            ]);
        DB::table('users')->insert([
            'name' => 'usuario',
            'email' => 'usuario@gmail.com',
            'password' => bcrypt('1234'),
        ]);
        DB::table('users')->insert([
            'name' => 'cliente',
            'email' => 'cliente@gmail.com',
            'password' => bcrypt('1234'),
        ]);

        App\User::create([
            'name' => 'admin2',
            'email' => 'admin2@gmail.com',
            'password' => bcrypt('1234'),
        ]);

        factory(App\User::class, 3)->create();
    }
}
