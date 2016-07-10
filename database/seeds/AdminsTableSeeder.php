<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->delete();
         DB::table('admins')->insert([
            'fullname' => 'Avijit Bhattacharjee',
            'username' => 'avijit1258',
            'type' => 'super_admin',
            'active' => 1,
            'password' => bcrypt('secret'),
            
        ]);
        DB::table('admins')->insert([
            'fullname' => 'Nazia Sultana',
            'username' => 'nazia1408',
            'type' => 'super_admin',
            'active' => 1,
            'password' => bcrypt('secret'),
            
        ]);
        DB::table('admins')->insert([
            'fullname' => 'Razin Abid',
            'username' => 'razin223',
            'type' => 'super_admin',
            'active' => 1,
            'password' => bcrypt('secret'),
            
        ]);

    }
}
