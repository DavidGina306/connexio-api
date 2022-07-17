<?php

use App\Teacher;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i = 0; $i < 50; $i++) {
            Teacher::query()->firstOrCreate(
                [
                    'name' =>  $name = $faker->name(),
                    'about' =>  $faker->text(),
                    'social_media_1' => 'https://www.facebook.com/' . $name,
                    'social_media_2' => 'https://www.instagram.com/' . $name,
                    'social_media_3' => 'https://twitter.com/' . $name,
                    'email'  => $name . '@gmail.com',
                    'contact_1' => '(92) 99999-9999',
                    'contact_2' => ''
                ]
            );
        }
    }
}
