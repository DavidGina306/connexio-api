<?php

use App\Subject;
use App\Teacher;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class SubjectsToTeacherSeeder extends Seeder
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
                'subjects' => ['Pesquisa e Prática em Educação', 'Educação Inclusiva', 'Neuropedagogia']
            ],
            [
                'name' => 'João Paulo Lins',
                'subjects' => ['Cálculo diferencial e integral 2', 'Matemática discreta']
            ],
            [
                'name' => 'Rivelino câmara',
                'subjects' => ['Introdução às Equações Diferenciais', 'Álgebra Linear e Vetorial para Computação', 'Algoritmos em grafos']
            ],
            [
                'name' => 'Sabrina Feitosa de Jesus',
                'subjects' => [' Métodos Físicos', ' Quimica Ambiental']
            ],
            [
                'name' => 'Bruno Carvalho',
                'subjects' => ['Estudo da música I', 'Harmonia II', 'Harmonia', 'Piano III']
            ],
            [
                'name' => 'Rodrigo Limarques de Albuquerque',
                'subjects' => ['Neurologia e Neurocirurgia', 'Fisiologia Humana', 'Urgências Médicas']
            ],
            [
                'name' => 'Gabriel Pacheco',
                'subjects' => ['Mecânica de Fluidos', 'Mecânica do Voo', 'Mecânica de Sólidos']
            ],

        ];

        foreach ($teachers as $teacher) {
            $teacher = Teacher::whereName($teacher['name'])->first();
            $teacher->subjects()->attach(
                Subject::whereIn('title', $teacher['subjects'])->pluck('id')
            );
        }
    }
}
