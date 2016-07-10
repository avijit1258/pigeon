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
        DB::table('users')->delete();
         DB::table('users')->insert([
            'fullname' => 'Avijit Bhattacharjee',
            'username' => 'avijit-hanif',
            'type' => 'admin',
            'active' => 1,
            'password' => bcrypt('123456'),
            'company_id' => 1,
            
        ]);
        DB::table('users')->insert([
            'fullname' => 'Nazia Sultana',
            'username' => 'nazia-hanif',
            'type' => 'admin',
            'active' => 1,
            'password' => bcrypt('123456'),
             'company_id' => 1,

            
        ]);
        DB::table('users')->insert([
            'fullname' => 'Razin Abid',
            'username' => 'razin-hanif',
            'type' => 'admin',
            'active' => 1,
            'password' => bcrypt('123456'),
            'company_id' => 1,

            
        ]);

    }
}
