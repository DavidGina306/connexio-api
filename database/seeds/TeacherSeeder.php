<?php

use App\Teacher;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

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
            $name = $faker->name;
            $replace = self::tirarAcentos(Str::lower(str_replace(" ", "", $name)));
            Teacher::query()->firstOrCreate(
                [
                    'name' =>  $name,
                    'about' =>  $faker->text(),
                    'url_photo' => 'https://picsum.photos/200/300?random=' . random_int(1, 100),
                    'social_media_1' => 'https://www.facebook.com/' . $replace,
                    'social_media_2' => 'https://www.instagram.com/' . $replace,
                    'social_media_3' => 'https://twitter.com/' . $replace,
                    'email'  => $faker->email,
                    'contact_1' => '(92) 99999-9999',
                    'contact_2' => ''
                ]
            );
        }
    }

    public function tirarAcentos($string)
    {
        return preg_replace(array("/(á|à|ã|â|ä)/", "/(Á|À|Ã|Â|Ä)/", "/(é|è|ê|ë)/", "/(É|È|Ê|Ë)/", "/(í|ì|î|ï)/", "/(Í|Ì|Î|Ï)/", "/(ó|ò|õ|ô|ö)/", "/(Ó|Ò|Õ|Ô|Ö)/", "/(ú|ù|û|ü)/", "/(Ú|Ù|Û|Ü)/", "/(ñ)/", "/(Ñ)/"), explode(" ", "a A e E i I o O u U n N"), $string);
    }
}
