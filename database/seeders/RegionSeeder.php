<?php

namespace Database\Seeders;

use App\Models\Region;
use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $regions = [
            [
                "name" =>"Region I (Ilocos Region)",
                "country_code" =>1,
            ],
            
            [
                "name" =>"Region II (Cagayan Valley)",
                "country_code" =>1,
            ],
            
            [
                "name" =>"Region III (Central Luzon)",
                "country_code" =>1,
            ],
            
            [
                "name" =>"Region IV-A (CALABARZON)",
                "country_code" =>1,
            ],
            
            [
                "name" =>"MIMAROPA Region",
                "country_code" =>1,
            ],
            
            [
                "name" =>"Region V (Bicol Region)",
                "country_code" =>1,
            ],
            
            [
                "name" =>"Region VI (Western Visayas)",
                "country_code" =>1,
            ],
            
            [
                "name" =>"Region VII (Central Visayas)",
                "country_code" =>1,
            ],
            
            [
                "name" =>"Region VIII (Eastern Visayas)",
                "country_code" =>1,
            ],
            
            [
                "name" =>"Region IX (Zamboanga Peninsula)",
                "country_code" =>1,
            ],
            
            [
                "name" =>"Region X (Northern Mindanao)",
                "country_code" =>1,
            ],
            
            [
                "name" =>"Region XI (Davao Region)",
                "country_code" =>1,
            ],
            
            [
                "name" =>"Region XII (SOCCSKSARGEN)",
                "country_code" =>1,
            ],
            
            [
                "name" =>"Region XIII (Caraga)",
                "country_code" =>1,
            ],
            
            [
                "name" =>"National Capital Region (NCR)",
                "country_code" =>1,
            ],
            
            [
                "name" =>"Cordillera Administrative Region (CAR)",
                "country_code" =>1,
            ],
            
            [
                "name" =>"Autonomous Region In Muslim Mindanao (ARMM)",
                "country_code" =>1,
            ],
        ];

        foreach ($regions as $region) {
            Region::insert($region);
        }
    }
}
