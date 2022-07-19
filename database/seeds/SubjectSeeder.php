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
                'title' => "Pesquisa e Prática em Educação",
                "description" => $faker->text,
            ],
            [
                'title'  => "Educação Inclusiva",
                "description" => $faker->text,
            ],
            [
                'title'  => "Neuropedagogia",
                "description" => $faker->text,
            ],
            [
                'title'  => "Cálculo diferencial e integral 2",
                "description" => $faker->text
            ],
            [
                'title'  => "Matemática discreta",
                "description" => $faker->text
            ],
            [
                'title'  => "Introdução às Equações Diferenciais",
                "description" => $faker->text
            ],
            [
                'title'  => "Álgebra Linear e Vetorial para Computação",
                "description" => $faker->text
            ],
            [
                'title'  => "Algoritmos em grafos",
                "description" => $faker->text
            ],
            [
                'title'  => "Matemática discreta",
                "description" => $faker->text
            ],
            [
                'title'  => "Métodos Físicos",
                "description" => $faker->text
            ],
            [
                'title'  => "Quimica Ambiental",
                "description" => $faker->text
            ],
            [
                'title'  => "Estudo da música I",
                "description" => $faker->text
            ],
            [
                'title'  => "Harmonia II",
                "description" => $faker->text
            ],
            [
                'title'  => "Piano III",
                "description" => $faker->text
            ],
            [
                'title'  => "Neurologia e Neurocirurgia",
                "description" => $faker->text
            ],
            [
                'title'  => "Fisiologia Humana",
                "description" => $faker->text
            ],
            [
                'title'  => "Urgências Médicas",
                "description" => $faker->text
            ],
            [
                'title'  => "Mecânica de Fluidos",
                "description" => $faker->text
            ],
            [
                'title'  => "Mecânica do Voo",
                "description" => $faker->text
            ],
            [
                'title'  => "Mecânica de Sólidos",
                "description" => $faker->text
            ]

        ];

        foreach ($subjects as $subject) {
            Subject::query()->firstOrCreate(
                $subject
            );
        }
    }
}
