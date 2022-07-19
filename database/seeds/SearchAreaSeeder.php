<?php

use App\SearchArea;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

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
                'name' => $faker->sentence(Arr::random([1, 2, 3])),
                "description" => $faker->text
            ],
            [
                'name'  => $faker->sentence(Arr::random([1, 2, 3])),
                "description" => $faker->text
            ],
            [
                'name'  => $faker->sentence(Arr::random([1, 2, 3])),
                "description" => $faker->text
            ],
            [
                'name'  => $faker->sentence(Arr::random([1, 2, 3])),
                "description" => $faker->text
            ],
            [
                'name'  => $faker->sentence(Arr::random([1, 2, 3])),
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
