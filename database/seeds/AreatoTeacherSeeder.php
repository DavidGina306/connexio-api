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
        Teacher::first()->areas()->attach(
           SearchArea::first()->id
        );
    }
}
