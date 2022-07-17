<?php

use App\SearchArea;
use Illuminate\Database\Seeder;

class SearchAreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $searchAreas = [
            [
                'name' => $faker->text(100),
                "description" => $faker->text
            ],
            [
                'name'  => $faker->text(100),
                "description" => $faker->text
            ],
            [
                'name'  => $faker->text(100),
                "description" => $faker->text
            ],
            [
                'name'  => $faker->text(100),
                "description" => $faker->text
            ],
            [
                'name'  => $faker->text(100),
                "description" => $faker->text
            ],

        ];

        foreach ($searchAreas as $search) {
            SearchArea::query()->firstOrCreate(
                $search
            );
        }
    }
}
