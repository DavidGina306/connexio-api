<?php

use App\Subject;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
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
            ],
            [
                'title'  => $faker->text(100),
                "description" => $faker->text,
            ],
            [
                'title'  => $faker->text(100),
                "description" => $faker->text,
            ],
            [
                'title'  => $faker->text(100),
                "description" => $faker->text
            ],
            [
                'title'  => $faker->text(100),
                "description" => $faker->text
            ],

        ];

        foreach ($subjects as $subject) {
            Subject::query()->firstOrCreate(
                $subject
            );
        }
    }
}
