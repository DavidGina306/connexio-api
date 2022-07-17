<?php

namespace App\Http\Resources;

use App\Teacher;
use Illuminate\Http\Resources\Json\JsonResource;

class SearchTeacherResource extends JsonResource
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
            "social_media_2" => $this->social_media_3,
            "id" => $this->id,
            "contact_1" => $this->contact_1,
            "contact_2" => $this->contact_1,
            "areas" => Teacher::find($this->id)->areas()->pluck('name')
        ];
    }
}
