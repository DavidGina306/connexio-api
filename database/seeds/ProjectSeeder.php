<?php

use App\Project;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $subjects = [
            [
                'title' => $faker->text(100),
                "description" => $faker->text,
                'initial_date' => Carbon::now()
            ],
            [
                'title'  => $faker->text(100),
                "description" => $faker->text,
                'initial_date' => Carbon::now()
            ],
            [
                'title'  => $faker->text(100),
                "description" => $faker->text,
                'initial_date' => Carbon::now()
            ],
            [
                'title'  => $faker->text(100),
                "description" => $faker->text,
                'initial_date' => Carbon::now()
            ],
            [
                'title'  => $faker->text(100),
                "description" => $faker->text,
                'initial_date' => Carbon::now()
            ],

        ];

        foreach ($subjects as $subject) {
            Project::query()->firstOrCreate(
                $subject
            );
        }
    }
}
