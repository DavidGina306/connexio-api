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
                'name' => "Pedagogia",
                "description" => $faker->text
            ],
            [
                'name'  => "Neuropsicopedagogia",
                "description" => $faker->text
            ],
            [
                'name'  => "Distúrbio de aprendizagem",
                "description" => $faker->text
            ],
            [
                'name'  => "Matemática",
                "description" => $faker->text
            ],
            [
                'name'  => "Geometria e Topologia",
                "description" => $faker->text
            ],
            [
                'name'  => "Matemática Aplicada",
                "description" => $faker->text
            ],
            [
                'name'  => "Ciências Exatas e da Terra",
                "description" => $faker->text
            ],
            [
                'name'  => "Espaço forma Riemanniano",
                "description" => $faker->text
            ],
            [
                'name'  => "Curvaturas de ordem superior",
                "description" => $faker->text
            ],
            [
                'name'  => "Análise Geoambiental",
                "description" => $faker->text
            ],
            [
                'name'  => "Quimica",
                "description" => $faker->text
            ],
            [
                'name'  => "Radioecologia Terrestre",
                "description" => $faker->text
            ],
            [
                'name'  => "Ciência Ambiental",
                "description" => $faker->text
            ],
            [
                'name'  => "Plantas Medicinais Brasileiras",
                "description" => $faker->text
            ],
            [
                'name'  => "Música",
                "description" => $faker->text
            ],
            [
                'name'  => "Composição",
                "description" => $faker->text
            ],
            [
                'name'  => "Harmonia",
                "description" => $faker->text
            ],
            [
                'name'  => "Regência",
                "description" => $faker->text
            ],
            [
                'name'  => "Medicina",
                "description" => $faker->text
            ],
            [
                'name'  => "Lesão medular",
                "description" => $faker->text
            ],
            [
                'name'  => "Neurociências",
                "description" => $faker->text
            ],
            [
                'name'  => "Ciências da Saúde",
                "description" => $faker->text
            ],
            [
                'name'  => "Engenharia",
                "description" => $faker->text
            ],
            [
                'name'  => "Sistemas Mecânicos",
                "description" => $faker->text
            ],
            [
                'name'  => "Sistemas de Propulsão",
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
