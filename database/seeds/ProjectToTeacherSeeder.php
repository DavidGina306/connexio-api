<?php

use App\Project;
use App\Teacher;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ProjectToTeacherSeeder extends Seeder
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

        $projects = Project::all()->random(random_int(1, 3));
        $projects->map(function ($project) use ($teacher) {
            $teacher->projects()->attach($project->id, ['initial_date' => Carbon::now()]);
        });
       }
    }
}
