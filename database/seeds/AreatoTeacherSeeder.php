<?php

use App\SearchArea;
use App\Teacher;
use Illuminate\Database\Seeder;

class AreatoTeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teachers = [
            [
                'name' => 'Silvia Muniz Gadelha',
                'areas' => ['Pedagogia', 'Neuropsicopedagogia', 'Distúrbio de Aprendizagem']
            ],
            [
                'name' => 'João Paulo Lins',
                'areas' => ['Matemática', 'Geometria e Topologia']
            ],
            [
                'name' => 'Rivelino câmara',
                'areas' => ['Matemática', 'Matemática Aplicada', 'Geometria e Topologia', 'Ciências Exatas e da Terra', 'Espaço forma Riemanniano', 'Curvaturas de ordem superior']
            ],
            [
                'name' => 'Sabrina Feitosa de Jesus',
                'areas' => ['Quimica', 'Radioecologia Terrestre', 'Ciência Ambiental', 'Análise Geoambiental', 'Plantas Medicinais Brasileiras']
            ],
            [
                'name' => 'Bruno Carvalho',
                'areas' => ['Música', 'Composição', 'Harmonia', 'Regência']
            ],
            [
                'name' => 'Rodrigo Limarques de Albuquerque',
                'areas' => ['Medicina', 'Lesão medular', 'Neurociências', 'Ciências da Saúde']
            ],
            [
                'name' => 'Gabriel Pacheco',
                'areas' => ['Engenharia', 'Sistemas Mecânicos', 'Sistemas de Propulsão']
            ],

        ];

        foreach ($teachers as $teacher) {
            $teacherAdd = Teacher::whereName($teacher['name'])->first();
            $areas = SearchArea::whereIn('name', $teacher['areas'])->get();
            $areas->map(function ($subject) use ($teacherAdd) {
                $teacherAdd->areas()->attach($subject->id);
            });
        }
    }
}
