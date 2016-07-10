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
        	['zone_name' => 'Barguna', 'Modified_by' => 'Avijit Bhattacharjee', 'Modified_at'=> Carbon::now()],
        	['zone_name' => 'Barisal', 'Modified_by' => 'Avijit Bhattacharjee', 'Modified_at'=> Carbon::now()],
        	['zone_name' => 'Bhola', 'Modified_by' => 'Avijit Bhattacharjee', 'Modified_at'=> Carbon::now()],
        	['zone_name' => 'Jhalokati', 'Modified_by' => 'Avijit Bhattacharjee', 'Modified_at'=> Carbon::now()],
        	['zone_name' => 'Patuakhali', 'Modified_by' => 'Avijit Bhattacharjee', 'Modified_at'=> Carbon::now()],
        	['zone_name' => 'Pirojpur', 'Modified_by' => 'Avijit Bhattacharjee', 'Modified_at'=> Carbon::now()],
        	['zone_name' => 'Bandarban', 'Modified_by' => 'Avijit Bhattacharjee', 'Modified_at'=> Carbon::now()],
        	['zone_name' => 'Brahmanbaria', 'Modified_by' => 'Avijit Bhattacharjee', 'Modified_at'=> Carbon::now()],
        	['zone_name' => 'Chandpur', 'Modified_by' => 'Avijit Bhattacharjee', 'Modified_at'=> Carbon::now()],
        	['zone_name' => 'Chittagong', 'Modified_by' => 'Avijit Bhattacharjee', 'Modified_at'=> Carbon::now()],
        	['zone_name' => 'Comilla', 'Modified_by' => 'Avijit Bhattacharjee', 'Modified_at'=> Carbon::now()],
        	['zone_name' => 'Cox s Bazar', 'Modified_by' => 'Avijit Bhattacharjee', 'Modified_at'=> Carbon::now()],
        	['zone_name' => 'Feni', 'Modified_by' => 'Avijit Bhattacharjee', 'Modified_at'=> Carbon::now()],
        	['zone_name' => 'Khagrachhari', 'Modified_by' => 'Avijit Bhattacharjee', 'Modified_at'=> Carbon::now()],
        	['zone_name' => 'Lakshmipur', 'Modified_by' => 'Avijit Bhattacharjee', 'Modified_at'=> Carbon::now()],
        	['zone_name' => 'Noakhali', 'Modified_by' => 'Avijit Bhattacharjee', 'Modified_at'=> Carbon::now()],
        	['zone_name' => 'Rangamati', 'Modified_by' => 'Avijit Bhattacharjee', 'Modified_at'=> Carbon::now()],
        	['zone_name' => 'Dhaka', 'Modified_by' => 'Avijit Bhattacharjee', 'Modified_at'=> Carbon::now()],
        	['zone_name' => 'Faridpur', 'Modified_by' => 'Avijit Bhattacharjee', 'Modified_at'=> Carbon::now()],
        	['zone_name' => 'Gazipur', 'Modified_by' => 'Avijit Bhattacharjee', 'Modified_at'=> Carbon::now()],
        	['zone_name' => 'Bagerhatalganj', 'Modified_by' => 'Avijit Bhattacharjee', 'Modified_at'=> Carbon::now()],
        	['zone_name' => 'Kishoreganj', 'Modified_by' => 'Avijit Bhattacharjee', 'Modified_at'=> Carbon::now()],
        	['zone_name' => 'Madaripur', 'Modified_by' => 'Avijit Bhattacharjee', 'Modified_at'=> Carbon::now()],
        	['zone_name' => 'Manikganj', 'Modified_by' => 'Avijit Bhattacharjee', 'Modified_at'=> Carbon::now()],
        	['zone_name' => 'Munshiganj', 'Modified_by' => 'Avijit Bhattacharjee', 'Modified_at'=> Carbon::now()],
        	['zone_name' => 'Narayanganj', 'Modified_by' => 'Avijit Bhattacharjee', 'Modified_at'=> Carbon::now()],
        	['zone_name' => 'Narsingdi', 'Modified_by' => 'Avijit Bhattacharjee', 'Modified_at'=> Carbon::now()],
        	['zone_name' => 'Rajbari', 'Modified_by' => 'Avijit Bhattacharjee', 'Modified_at'=> Carbon::now()],
        	['zone_name' => 'Shariatpur', 'Modified_by' => 'Avijit Bhattacharjee', 'Modified_at'=> Carbon::now()],
        	['zone_name' => 'Tangail', 'Modified_by' => 'Avijit Bhattacharjee', 'Modified_at'=> Carbon::now()],
        	['zone_name' => 'Bagerhat', 'Modified_by' => 'Avijit Bhattacharjee', 'Modified_at'=> Carbon::now()],
        	['zone_name' => 'Chuadanga', 'Modified_by' => 'Avijit Bhattacharjee', 'Modified_at'=> Carbon::now()],
        	['zone_name' => 'Jessore', 'Modified_by' => 'Avijit Bhattacharjee', 'Modified_at'=> Carbon::now()],
        	['zone_name' => 'Jhenaidah', 'Modified_by' => 'Avijit Bhattacharjee', 'Modified_at'=> Carbon::now()],
        	['zone_name' => 'Khulna', 'Modified_by' => 'Avijit Bhattacharjee', 'Modified_at'=> Carbon::now()],
        	['zone_name' => 'Kushtia', 'Modified_by' => 'Avijit Bhattacharjee', 'Modified_at'=> Carbon::now()],
        	['zone_name' => 'Magura', 'Modified_by' => 'Avijit Bhattacharjee', 'Modified_at'=> Carbon::now()],
        	['zone_name' => 'Meherpur', 'Modified_by' => 'Avijit Bhattacharjee', 'Modified_at'=> Carbon::now()],
        	['zone_name' => 'Narail', 'Modified_by' => 'Avijit Bhattacharjee', 'Modified_at'=> Carbon::now()],
        	['zone_name' => 'Satkhira', 'Modified_by' => 'Avijit Bhattacharjee', 'Modified_at'=> Carbon::now()],
        	['zone_name' => 'Mymensingh', 'Modified_by' => 'Avijit Bhattacharjee', 'Modified_at'=> Carbon::now()],
        	['zone_name' => 'Netrakona', 'Modified_by' => 'Avijit Bhattacharjee', 'Modified_at'=> Carbon::now()],
        	['zone_name' => 'Sherpur', 'Modified_by' => 'Avijit Bhattacharjee', 'Modified_at'=> Carbon::now()],
        	['zone_name' => 'Bogra', 'Modified_by' => 'Avijit Bhattacharjee', 'Modified_at'=> Carbon::now()],
        	['zone_name' => 'Joypurhat', 'Modified_by' => 'Avijit Bhattacharjee', 'Modified_at'=> Carbon::now()],
        	['zone_name' => 'Naogaon', 'Modified_by' => 'Avijit Bhattacharjee', 'Modified_at'=> Carbon::now()],
        	['zone_name' => 'Natore', 'Modified_by' => 'Avijit Bhattacharjee', 'Modified_at'=> Carbon::now()],
        	['zone_name' => 'Chapainawabganj', 'Modified_by' => 'Avijit Bhattacharjee', 'Modified_at'=> Carbon::now()],
        	['zone_name' => 'Pabna', 'Modified_by' => 'Avijit Bhattacharjee', 'Modified_at'=> Carbon::now()],
        	['zone_name' => 'Rajshahi', 'Modified_by' => 'Avijit Bhattacharjee', 'Modified_at'=> Carbon::now()],
        	['zone_name' => 'Sirajganj', 'Modified_by' => 'Avijit Bhattacharjee', 'Modified_at'=> Carbon::now()],
        	['zone_name' => 'Dinajpur', 'Modified_by' => 'Avijit Bhattacharjee', 'Modified_at'=> Carbon::now()],
        	['zone_name' => 'Gaibandha', 'Modified_by' => 'Avijit Bhattacharjee', 'Modified_at'=> Carbon::now()],
        	['zone_name' => 'Kurigram', 'Modified_by' => 'Avijit Bhattacharjee', 'Modified_at'=> Carbon::now()],
        	['zone_name' => 'Lalmonirhat', 'Modified_by' => 'Avijit Bhattacharjee', 'Modified_at'=> Carbon::now()],
        	['zone_name' => 'Nilphamari', 'Modified_by' => 'Avijit Bhattacharjee', 'Modified_at'=> Carbon::now()],
        	['zone_name' => 'Panchagarh', 'Modified_by' => 'Avijit Bhattacharjee', 'Modified_at'=> Carbon::now()],
        	['zone_name' => 'Rangpur', 'Modified_by' => 'Avijit Bhattacharjee', 'Modified_at'=> Carbon::now()],
        	['zone_name' => 'Thakurgaon', 'Modified_by' => 'Avijit Bhattacharjee', 'Modified_at'=> Carbon::now()],
        	['zone_name' => 'Habiganj', 'Modified_by' => 'Avijit Bhattacharjee', 'Modified_at'=> Carbon::now()],
        	['zone_name' => 'Moulvibazar', 'Modified_by' => 'Avijit Bhattacharjee', 'Modified_at'=> Carbon::now()],
        	['zone_name' => 'Sunamganj', 'Modified_by' => 'Avijit Bhattacharjee', 'Modified_at'=> Carbon::now()],
        	['zone_name' => 'Sylhet', 'Modified_by' => 'Avijit Bhattacharjee', 'Modified_at'=> Carbon::now()],

        ];
        DB::table('zones')->insert($zones);
    }
}
 
 