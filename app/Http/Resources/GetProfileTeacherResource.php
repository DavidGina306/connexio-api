<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Log;

class GetProfileTeacherResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return  [
            "name" => $this->name,
            "about" => $this->about,
            "url_photo" => $this->url_photo,
            'email' => $this->email,
            "social_media_1" => $this->social_media_1,
            "social_media_2" => $this->social_media_2,
            "social_media_3" => $this->social_media_3,
            "id" => $this->id,
            "contact_1" => $this->contact_1,
            "contact_2" => $this->contact_2,
            'areas' => $this->areas->pluck('name'),
            'projects' => $this->projects->map(function ($project) {
                return [
                    'title' => $project->title,
                    'initial_date' => $project->initial_date,
                    'final_date' => $project->final_date
                ];
            }),
            'subjects' => $this->subjects->map(function ($subject) {
                Log::info($subject);
                return [
                    'title' => $subject->title,
                    'initial_date' => $subject->initial_date,
                    'final_date' => $subject->final_date
                ];
            }),
        ];
    }
}
