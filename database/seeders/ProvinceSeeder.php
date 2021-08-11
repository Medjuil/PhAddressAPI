<?php

namespace Database\Seeders;

use App\Models\Province;
use Illuminate\Database\Seeder;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $provinces = [
			//Region I (Ilocos Region)
				[
					"name" => "Ilocos Norte",
					"country_code" => 1,
					"region_code" => 1,
				],

				[
					"name" => "Ilocos Sur",
					"country_code" => 1,
					"region_code" => 1,
				],

				[
					"name" => "La Union",
					"country_code" => 1,
					"region_code" => 1,
				],

				[
					"name" => "Pangasinan",
					"country_code" => 1,
					"region_code" => 1,
				],


			//Region II (Cagayan Valley)
				[
					"name" => "Batanes",
					"country_code" => 1,
					"region_code" => 2,
				],

				[
					"name" => "Cagayan",
					"country_code" => 1,
					"region_code" => 2,
				],

				[
					"name" => "Isabela",
					"country_code" => 1,
					"region_code" => 2,
				],

				[
					"name" => "Nueva Vizcaya",
					"country_code" => 1,
					"region_code" => 2,
				],

				[
					"name" => "Quirino",
					"country_code" => 1,
					"region_code" => 2,
				],


			//Region III (Central Luzon)
				[
					"name" => "Aurora",
					"country_code" => 1,
					"region_code" => 3,
				],

				[
					"name" => "Bataan",
					"country_code" => 1,
					"region_code" => 3,
				],

				[
					"name" => "Bulacan",
					"country_code" => 1,
					"region_code" => 3,
				],

				[
					"name" => "Nueva Ecija",
					"country_code" => 1,
					"region_code" => 3,
				],

				[
					"name" => "Pampanga",
					"country_code" => 1,
					"region_code" => 3,
				],

				[
					"name" => "Tarlac",
					"country_code" => 1,
					"region_code" => 3,
				],

				[
					"name" => "Zambales",
					"country_code" => 1,
					"region_code" => 3,
				],


			//Region IV-A (CALABARZON)
				[
					"name" => "Batangas",
					"country_code" => 1,
					"region_code" => 4,
				],

				[
					"name" => "Cavite",
					"country_code" => 1,
					"region_code" => 4,
				],

				[
					"name" => "Laguna",
					"country_code" => 1,
					"region_code" => 4,
				],

				[
					"name" => "Quezon",
					"country_code" => 1,
					"region_code" => 4,
				],

				[
					"name" => "Rizal",
					"country_code" => 1,
					"region_code" => 4,
				],


			//MIMAROPA Region
				[
					"name" => "Marinduque",
					"country_code" => 1,
					"region_code" => 5,
				],

				[
					"name" => "Occidental Mindoro",
					"country_code" => 1,
					"region_code" => 5,
				],

				[
					"name" => "Oriental Mindoro",
					"country_code" => 1,
					"region_code" => 5,
				],

				[
					"name" => "Palawan",
					"country_code" => 1,
					"region_code" => 5,
				],

				[
					"name" => "Romblon",
					"country_code" => 1,
					"region_code" => 5,
				],


			//Region V (Bicol Region)
				[
					"name" => "Albay",
					"country_code" => 1,
					"region_code" => 6,
				],

				[
					"name" => "Camarines Norte",
					"country_code" => 1,
					"region_code" => 6,
				],

				[
					"name" => "Camarines Sur",
					"country_code" => 1,
					"region_code" => 6,
				],

				[
					"name" => "Catanduanes",
					"country_code" => 1,
					"region_code" => 6,
				],

				[
					"name" => "Masbate",
					"country_code" => 1,
					"region_code" => 6,
				],

				[
					"name" => "Sorsogon",
					"country_code" => 1,
					"region_code" => 6,
				],


			//Region VI (Western Visayas)
				[
					"name" => "Aklan",
					"country_code" => 1,
					"region_code" => 7,
				],

				[
					"name" => "Antique",
					"country_code" => 1,
					"region_code" => 7,
				],

				[
					"name" => "Capiz",
					"country_code" => 1,
					"region_code" => 7,
				],

				[
					"name" => "Guimaras",
					"country_code" => 1,
					"region_code" => 7,
				],

				[
					"name" => "Iloilo",
					"country_code" => 1,
					"region_code" => 7,
				],

				[
					"name" => "Negros Occidental",
					"country_code" => 1,
					"region_code" => 7,
				],


			//Region VII (Central Visayas)
				[
					"name" => "Bohol",
					"country_code" => 1,
					"region_code" => 8,
				],

				[
					"name" => "Cebu",
					"country_code" => 1,
					"region_code" => 8,
				],

				[
					"name" => "Negros Oriental",
					"country_code" => 1,
					"region_code" => 8,
				],

				[
					"name" => "Siquijor",
					"country_code" => 1,
					"region_code" => 8,
				],


			//Region VIII (Eastern Visayas)
				[
					"name" => "Biliran",
					"country_code" => 1,
					"region_code" => 9,
				],

				[
					"name" => "Eastern Samar",
					"country_code" => 1,
					"region_code" => 9,
				],

				[
					"name" => "Leyte",
					"country_code" => 1,
					"region_code" => 9,
				],

				[
					"name" => "Northern Samar",
					"country_code" => 1,
					"region_code" => 9,
				],

				[
					"name" => "Samar",
					"country_code" => 1,
					"region_code" => 9,
				],

				[
					"name" => "Southern Leyte",
					"country_code" => 1,
					"region_code" => 9,
				],


			//Region IX (Zamboanga Peninsula)
				[
					"name" => "Isabela City",
					"country_code" => 1,
					"region_code" => 10,
				],

				[
					"name" => "Zamboanga del Norte",
					"country_code" => 1,
					"region_code" => 10,
				],

				[
					"name" => "Zamboanga del Sur",
					"country_code" => 1,
					"region_code" => 10,
				],

				[
					"name" => "Zamboanga Sibugay",
					"country_code" => 1,
					"region_code" => 10,
				],


			//Region X (Northern Mindanao)
				[
					"name" => "Bukidnon",
					"country_code" => 1,
					"region_code" => 11,
				],

				[
					"name" => "Camiguin",
					"country_code" => 1,
					"region_code" => 11,
				],

				[
					"name" => "Lanao del Norte",
					"country_code" => 1,
					"region_code" => 11,
				],

				[
					"name" => "Misamis Occidental",
					"country_code" => 1,
					"region_code" => 11,
				],

				[
					"name" => "Misamis Oriental",
					"country_code" => 1,
					"region_code" => 11,
				],


			//Region XI (Davao Region)
				[
					"name" => "Davao de Oro",
					"country_code" => 1,
					"region_code" => 12,
				],

				[
					"name" => "Davao del Norte",
					"country_code" => 1,
					"region_code" => 12,
				],

				[
					"name" => "Davao del Sur",
					"country_code" => 1,
					"region_code" => 12,
				],

				[
					"name" => "Davao Occidental",
					"country_code" => 1,
					"region_code" => 12,
				],

				[
					"name" => "Davao Oriental",
					"country_code" => 1,
					"region_code" => 12,
				],


			//Region XII (SOCCSKSARGEN)
				[
					"name" => "Cotabato City",
					"country_code" => 1,
					"region_code" => 13,
				],

				[
					"name" => "Cotabato",
					"country_code" => 1,
					"region_code" => 13,
				],

				[
					"name" => "Sarangani",
					"country_code" => 1,
					"region_code" => 13,
				],

				[
					"name" => "South Cotabato",
					"country_code" => 1,
					"region_code" => 13,
				],

				[
					"name" => "Sultan Kudarat",
					"country_code" => 1,
					"region_code" => 13,
				],


			//Region XIII (Caraga)
				[
					"name" => "Agusan del Norte",
					"country_code" => 1,
					"region_code" => 14,
				],

				[
					"name" => "Agusan del Sur",
					"country_code" => 1,
					"region_code" => 14,
				],

				[
					"name" => "Dinagat Islands",
					"country_code" => 1,
					"region_code" => 14,
				],

				[
					"name" => "Surigao del Norte",
					"country_code" => 1,
					"region_code" => 14,
				],

				[
					"name" => "Surigao del Sur",
					"country_code" => 1,
					"region_code" => 14,
				],


			//National Capital Region (NCR)
				[
					"name" => "First District (Manila City)",
					"country_code" => 1,
					"region_code" => 15,
				],

				[
					"name" => "Second District (Eastern Manila)",
					"country_code" => 1,
					"region_code" => 15,
				],

				[
					"name" => "Third District (Northern Manila)",
					"country_code" => 1,
					"region_code" => 15,
				],

				[
					"name" => "Fourth District (Southern Manila)",
					"country_code" => 1,
					"region_code" => 15,
				],


			//Cordillera Administrative Region (CAR)
				[
					"name" => "Abra",
					"country_code" => 1,
					"region_code" => 16,
				],

				[
					"name" => "Apayao",
					"country_code" => 1,
					"region_code" => 16,
				],

				[
					"name" => "Benguet",
					"country_code" => 1,
					"region_code" => 16,
				],

				[
					"name" => "Ifugao",
					"country_code" => 1,
					"region_code" => 16,
				],

				[
					"name" => "Kalinga",
					"country_code" => 1,
					"region_code" => 16,
				],

				[
					"name" => "Mountain Province",
					"country_code" => 1,
					"region_code" => 16,
				],


			//Autonomous Region In Muslim Mindanao (ARMM)
				[
					"name" => "Basilan",
					"country_code" => 1,
					"region_code" => 17,
				],

				[
					"name" => "Lanao del Sur",
					"country_code" => 1,
					"region_code" => 17,
				],

				[
					"name" => "Maguindanao",
					"country_code" => 1,
					"region_code" => 17,
				],

				[
					"name" => "Sulu",
					"country_code" => 1,
					"region_code" => 17,
				],

				[
					"name" => "Tawi-Tawi",
					"country_code" => 1,
					"region_code" => 17,
				],


		];

		Province::insert($provinces);
    }
}
