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

        // for ($i = 0; $i < 50; $i++) {
        //     $name = $faker->name;
        //     $replace = self::tirarAcentos(Str::lower(str_replace(" ", "", $name)));
        //     Teacher::query()->firstOrCreate(
        //         [
        //             'name' =>  $name,
        //             'about' =>  $faker->text(),
        //             'url_photo' => 'https://picsum.photos/200/300?random=' . random_int(1, 100),
        //             'social_media_1' => 'https://www.facebook.com/' . $replace,
        //             'social_media_2' => 'https://www.instagram.com/' . $replace,
        //             'social_media_3' => 'https://twitter.com/' . $replace,
        //             'email'  => $faker->email,
        //             'contact_1' => '(92) 99999-9999',
        //             'contact_2' => ''
        //         ]
        //     );
        // }

        $professores = [
            [
                'name' =>  $name = 'Silvia Muniz Gadelha',
                'about' =>  "Licenciada em Pedagogia pela Universidade de São Paulo. Neuropsicopedagogia Clinica e Reabilitação Cognitiva pelo Instituto de Pedagogia.
                    Tem experiência na área de Psicologia, com ênfase em NEUROCIÊNCIAS, atuando principalmente nos seguintes temas: neuropsicologia da criança, adolescente, adulto e idoso. Experiência nas áreas de: epilepsia, neurocirurgia, doença de Parkinson, distúrbio de aprendizagem, Transtorno do Déficit de Atenção e Hiperatividade, Transtorno do Espectro Autista e pacientes demenciados.",
                'url_photo' => 'https://picsum.photos/200/300?random=' . random_int(1, 100),
                'social_media_1' => 'https://www.facebook.com/' . $replace = self::tirarAcentos(Str::lower(str_replace(" ", "", $name))),
                'social_media_2' => 'https://www.instagram.com/' . $replace,
                'social_media_3' => 'https://twitter.com/' . $replace,
                'email'  => $faker->email,
                'contact_1' => '(92) 99999-9999',
                'contact_2' => '',
            ],
            [
                'name' =>  $name = 'João Paulo Lins',
                'about' =>  "Mestrado em Matemática pela Universidade Federal de Pernambuco e doutorado em Matemática pela State University of New York at Binghamton. Tem experiência na área de Matemática, com ênfase em Geometria e Topologia.",
                'url_photo' => 'https://picsum.photos/200/300?random=' . random_int(1, 100),
                'social_media_1' => 'https://www.facebook.com/' . $replace = self::tirarAcentos(Str::lower(str_replace(" ", "", $name))),
                'social_media_2' => 'https://www.instagram.com/' . $replace,
                'social_media_3' => 'https://twitter.com/' . $replace,
                'email'  => $faker->email,
                'contact_1' => '(92) 99999-9999',
                'contact_2' => '',
            ],
            [
                'name' =>  $name = 'Rivelino Câmara',
                'about' =>  "Doutor pela Universidade Federal do Acre e Pós doutorado em Matemática pela Universidade Federal da Bahia. Tem experiência na área de Matemática, com ênfase em Geometria e Topologia.
                ",
                'url_photo' => 'https://picsum.photos/200/300?random=' . random_int(1, 100),
                'social_media_1' => 'https://www.facebook.com/' . $replace = self::tirarAcentos(Str::lower(str_replace(" ", "", $name))),
                'social_media_2' => 'https://www.instagram.com/' . $replace,
                'social_media_3' => 'https://twitter.com/' . $replace,
                'email'  => $faker->email,
                'contact_1' => '(92) 99999-9999',
                'contact_2' => '',
            ],
            [
                'name' =>  $name = 'Sabrina Feitosa de Jesus',
                'about' =>  "Possui graduação em QUIMICA ORGANICA - Universite Libre de Bruxelles e doutorado em Química Orgânica Atualmente é professora titular da Universidade Federal Fluminense.",
                'url_photo' => 'https://picsum.photos/200/300?random=' . random_int(1, 100),
                'social_media_1' => 'https://www.facebook.com/' . $replace = self::tirarAcentos(Str::lower(str_replace(" ", "", $name))),
                'social_media_2' => 'https://www.instagram.com/' . $replace,
                'social_media_3' => 'https://twitter.com/' . $replace,
                'email'  => $faker->email,
                'contact_1' => '(92) 99999-9999',
                'contact_2' => '',
            ],
            [
                'name' =>  $name = 'Bruno Carvalho',
                'about' =>  "Licenciado em música pela universidade federal do ceará, mestrado em piano pelo Conservatório de Moscou",
                'url_photo' => 'https://picsum.photos/200/300?random=' . random_int(1, 100),
                'social_media_1' => 'https://www.facebook.com/' . $replace = self::tirarAcentos(Str::lower(str_replace(" ", "", $name))),
                'social_media_2' => 'https://www.instagram.com/' . $replace,
                'social_media_3' => 'https://twitter.com/' . $replace,
                'email'  => $faker->email,
                'contact_1' => '(92) 99999-9999',
                'contact_2' => '',
            ],
            [
                'name' =>  $name = 'Rodrigo Limarques de Albuquerque',
                'about' =>  "Professor Associado de Neurologia da Universidade Federal do Ceará, Coordenador do Departamento Científico de Doenças do Neurônio Motor/ELA da Academia Brasileira de Neurologia, Ex-Coordenador do Departamento Científico de Neuropatias Periféricas e Chefe do Serviço de Neurologia da Universidade Federal do Ceará. É graduado em Medicina, Mestre  e em neurologia pela Universidade Federal do Ceará e Livre Docente em Neurologia pela Faculdade de Medicina da Universidade de São Paulo",
                'url_photo' => 'https://picsum.photos/200/300?random=' . random_int(1, 100),
                'social_media_1' => 'https://www.facebook.com/' . $replace = self::tirarAcentos(Str::lower(str_replace(" ", "", $name))),
                'social_media_2' => 'https://www.instagram.com/' . $replace,
                'social_media_3' => 'https://twitter.com/' . $replace,
                'email'  => $faker->email,
                'contact_1' => '(92) 99999-9999',
                'contact_2' => '',
            ],
            [
                'name' =>  $name = 'Gabriel Pacheco',
                'about' =>  "Graduado em engenharia aeroespacial pelo Instituto tecnologico de aeronáutica, Doutor em física pela universidade federal de Sergipe.",
                'url_photo' => 'https://picsum.photos/200/300?random=' . random_int(1, 100),
                'social_media_1' => 'https://www.facebook.com/' . $replace = self::tirarAcentos(Str::lower(str_replace(" ", "", $name))),
                'social_media_2' => 'https://www.instagram.com/' . $replace,
                'social_media_3' => 'https://twitter.com/' . $replace,
                'email'  => $faker->email,
                'contact_1' => '(92) 99999-9999',
                'contact_2' => '',
            ],

        ];

        foreach ($professores as  $value) {
            Teacher::query()->firstOrCreate($value);
        }
    }

    public function tirarAcentos($string)
    {
        return preg_replace(array("/(á|à|ã|â|ä)/", "/(Á|À|Ã|Â|Ä)/", "/(é|è|ê|ë)/", "/(É|È|Ê|Ë)/", "/(í|ì|î|ï)/", "/(Í|Ì|Î|Ï)/", "/(ó|ò|õ|ô|ö)/", "/(Ó|Ò|Õ|Ô|Ö)/", "/(ú|ù|û|ü)/", "/(Ú|Ù|Û|Ü)/", "/(ñ)/", "/(Ñ)/"), explode(" ", "a A e E i I o O u U n N"), $string);
    }
}
