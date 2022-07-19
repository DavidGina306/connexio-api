<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Teacher extends Model
{
    /**
     * The roles that belong to the Teacher
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function areas(): BelongsToMany
    {
        return $this->belongsToMany(SearchArea::class, 'search_areas_teachers', 'teacher_id', 'search_area_id');
    }

     /**
     * The roles that belong to the Teacher
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function projects(): BelongsToMany
    {
        return $this->belongsToMany(Project::class, 'project_teachers', 'teacher_id', 'project_id');
    }


     /**
     * The roles that belong to the Teacher
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function subjects(): BelongsToMany
    {
        return $this->belongsToMany(Subject::class, 'subject_teachers', 'teacher_id', 'subject_id');
    }
}
