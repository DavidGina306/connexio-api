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
       $teachers = Teacher::all();

       foreach ($teachers as $teacher) {
         $teacher->areas()->attach(
            SearchArea::all()->random(random_int(1, 3))->pluck('id')
         );
       }
    }
}
