<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $country = [
            [
                'id' => 1,
                'name' => 'Philippines',
                'code_name' => 'ph'
            ],
        ];

        Country::insert($country);
    }
}
