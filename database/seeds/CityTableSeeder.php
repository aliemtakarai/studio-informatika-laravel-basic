<?php

use Illuminate\Database\Seeder;
use App\City;

class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::truncate();
        City::create(
        	[
        		'city_name' => 'Makassar'
        	]
        );

        City::create(
        	[
        		'city_name' => 'Gowa'
        	]
        );
        City::create(
        	[
        		'city_name' => 'Maros'
        	]
        );
    }
}
