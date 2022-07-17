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
       $teachers = Teacher::all();

       foreach ($teachers as $teacher) {

        $subjects = Subject::all()->random(random_int(1, 3));
        $subjects->map(function ($subject) use ($teacher) {
            $teacher->subjects()->attach($subject->id, ['initial_date' => Carbon::now()]);
        });
       }
    }
}
