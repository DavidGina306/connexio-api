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
        Log::info($this->projects);
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
            'projects' => $this->projects->pluck('title'),
            'subjects' => $this->subjects->pluck('title')
        ];
    }
}
