<?php

use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->delete();
         DB::table('companies')->insert([
           'company_name' => 'Hanif Corporation',
           'modified_by' => 1,
           'modification_date' => '2016',
            
        ]);
        DB::table('companies')->insert([
            'company_name' => 'Eagle Corporation',
           'modified_by' => 1,
           'modification_date' => '2016',

            
        ]);
        DB::table('companies')->insert([
            'company_name' => 'Dola Corporation',
           'modified_by' => 1,
           'modification_date' => '2016',

            
        ]);

    }
}
