<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;

class ZonesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	DB::table('zones')->delete();
        $zones = [
        	['zone_name' => 'Barguna', 'modified_by' => 1, 'modified_at'=> Carbon::now()],
        	['zone_name' => 'Barisal', 'modified_by' => 1, 'modified_at'=> Carbon::now()],
        	['zone_name' => 'Bhola', 'modified_by' => 1, 'modified_at'=> Carbon::now()],
        	['zone_name' => 'Jhalokati', 'modified_by' => 1, 'modified_at'=> Carbon::now()],
        	['zone_name' => 'Patuakhali', 'modified_by' => 1, 'modified_at'=> Carbon::now()],
        	['zone_name' => 'Pirojpur', 'modified_by' => 1, 'modified_at'=> Carbon::now()],
        	['zone_name' => 'Bandarban', 'modified_by' => 1, 'modified_at'=> Carbon::now()],
        	['zone_name' => 'Brahmanbaria', 'modified_by' => 1, 'modified_at'=> Carbon::now()],
        	['zone_name' => 'Chandpur', 'modified_by' => 1, 'modified_at'=> Carbon::now()],
        	['zone_name' => 'Chittagong', 'modified_by' => 1, 'modified_at'=> Carbon::now()],
        	['zone_name' => 'Comilla', 'modified_by' => 1, 'modified_at'=> Carbon::now()],
        	['zone_name' => 'Cox s Bazar', 'modified_by' => 1, 'modified_at'=> Carbon::now()],
        	['zone_name' => 'Feni', 'modified_by' => 1, 'modified_at'=> Carbon::now()],
        	['zone_name' => 'Khagrachhari', 'modified_by' => 1, 'modified_at'=> Carbon::now()],
        	['zone_name' => 'Lakshmipur', 'modified_by' => 1, 'modified_at'=> Carbon::now()],
        	['zone_name' => 'Noakhali', 'modified_by' => 1, 'modified_at'=> Carbon::now()],
        	['zone_name' => 'Rangamati', 'modified_by' => 1, 'modified_at'=> Carbon::now()],
        	['zone_name' => 'Dhaka', 'modified_by' => 1, 'modified_at'=> Carbon::now()],
        	['zone_name' => 'Faridpur', 'modified_by' => 1, 'modified_at'=> Carbon::now()],
        	['zone_name' => 'Gazipur', 'modified_by' => 1, 'modified_at'=> Carbon::now()],
        	['zone_name' => 'Bagerhatalganj', 'modified_by' => 1, 'modified_at'=> Carbon::now()],
        	['zone_name' => 'Kishoreganj', 'modified_by' => 1, 'modified_at'=> Carbon::now()],
        	['zone_name' => 'Madaripur', 'modified_by' => 1, 'modified_at'=> Carbon::now()],
        	['zone_name' => 'Manikganj', 'modified_by' => 1, 'modified_at'=> Carbon::now()],
        	['zone_name' => 'Munshiganj', 'modified_by' => 1, 'modified_at'=> Carbon::now()],
        	['zone_name' => 'Narayanganj', 'modified_by' => 1, 'modified_at'=> Carbon::now()],
        	['zone_name' => 'Narsingdi', 'modified_by' => 1, 'modified_at'=> Carbon::now()],
        	['zone_name' => 'Rajbari', 'modified_by' => 1, 'modified_at'=> Carbon::now()],
        	['zone_name' => 'Shariatpur', 'modified_by' => 1, 'modified_at'=> Carbon::now()],
        	['zone_name' => 'Tangail', 'modified_by' => 1, 'modified_at'=> Carbon::now()],
        	['zone_name' => 'Bagerhat', 'modified_by' => 1, 'modified_at'=> Carbon::now()],
        	['zone_name' => 'Chuadanga', 'modified_by' => 1, 'modified_at'=> Carbon::now()],
        	['zone_name' => 'Jessore', 'modified_by' => 1, 'modified_at'=> Carbon::now()],
        	['zone_name' => 'Jhenaidah', 'modified_by' => 1, 'modified_at'=> Carbon::now()],
        	['zone_name' => 'Khulna', 'modified_by' => 1, 'modified_at'=> Carbon::now()],
        	['zone_name' => 'Kushtia', 'modified_by' => 1, 'modified_at'=> Carbon::now()],
        	['zone_name' => 'Magura', 'modified_by' => 1, 'modified_at'=> Carbon::now()],
        	['zone_name' => 'Meherpur', 'modified_by' => 1, 'modified_at'=> Carbon::now()],
        	['zone_name' => 'Narail', 'modified_by' => 1, 'modified_at'=> Carbon::now()],
        	['zone_name' => 'Satkhira', 'modified_by' => 1, 'modified_at'=> Carbon::now()],
        	['zone_name' => 'Mymensingh', 'modified_by' => 1, 'modified_at'=> Carbon::now()],
        	['zone_name' => 'Netrakona', 'modified_by' => 1, 'modified_at'=> Carbon::now()],
        	['zone_name' => 'Sherpur', 'modified_by' => 1, 'modified_at'=> Carbon::now()],
        	['zone_name' => 'Bogra', 'modified_by' => 1, 'modified_at'=> Carbon::now()],
        	['zone_name' => 'Joypurhat', 'modified_by' => 1, 'modified_at'=> Carbon::now()],
        	['zone_name' => 'Naogaon', 'modified_by' => 1, 'modified_at'=> Carbon::now()],
        	['zone_name' => 'Natore', 'modified_by' => 1, 'modified_at'=> Carbon::now()],
        	['zone_name' => 'Chapainawabganj', 'modified_by' => 1, 'modified_at'=> Carbon::now()],
        	['zone_name' => 'Pabna', 'modified_by' => 1, 'modified_at'=> Carbon::now()],
        	['zone_name' => 'Rajshahi', 'modified_by' => 1, 'modified_at'=> Carbon::now()],
        	['zone_name' => 'Sirajganj', 'modified_by' => 1, 'modified_at'=> Carbon::now()],
        	['zone_name' => 'Dinajpur', 'modified_by' => 1, 'modified_at'=> Carbon::now()],
        	['zone_name' => 'Gaibandha', 'modified_by' => 1, 'modified_at'=> Carbon::now()],
        	['zone_name' => 'Kurigram', 'modified_by' => 1, 'modified_at'=> Carbon::now()],
        	['zone_name' => 'Lalmonirhat', 'modified_by' => 1, 'modified_at'=> Carbon::now()],
        	['zone_name' => 'Nilphamari', 'modified_by' => 1, 'modified_at'=> Carbon::now()],
        	['zone_name' => 'Panchagarh', 'modified_by' => 1, 'modified_at'=> Carbon::now()],
        	['zone_name' => 'Rangpur', 'modified_by' => 1, 'modified_at'=> Carbon::now()],
        	['zone_name' => 'Thakurgaon', 'modified_by' => 1, 'modified_at'=> Carbon::now()],
        	['zone_name' => 'Habiganj', 'modified_by' => 1, 'modified_at'=> Carbon::now()],
        	['zone_name' => 'Moulvibazar', 'modified_by' => 1, 'modified_at'=> Carbon::now()],
        	['zone_name' => 'Sunamganj', 'modified_by' => 1, 'modified_at'=> Carbon::now()],
        	['zone_name' => 'Sylhet', 'modified_by' => 1, 'modified_at'=> Carbon::now()],

        ];
        DB::table('zones')->insert($zones);
    }
}
 
 