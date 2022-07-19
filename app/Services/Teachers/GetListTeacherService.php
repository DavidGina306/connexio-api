<?php

namespace App\Services\Teachers;

use App\Http\Resources\SearchTeacherResource;
use App\Teacher;
use Exception;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class GetListTeacherService
{
    public static function list(Request $request)
    {
        try {
            $teachers = Teacher::query();

            $teachers->when($search = $request->search, function ($query) use ($search) {
                $query->where(function (Builder $query) use ($search) {
                    $query->where('name', 'ilike', "%$search%");
                });
            });

            $teachers->when($searchArea = $request->search_areas, function ($query) use ($searchArea) {
                $query->where(function (Builder $query) use ($searchArea) {
                    $query->whereHas('areas', function (Builder $query)  use ($searchArea) {
                        $query->where('name', 'ilike', "%$searchArea%");
                    });
                });
            });

            $teachers
                ->select(
                    'teachers.id',
                    'teachers.name',
                    'teachers.about',
                    'teachers.url_photo',
                    'teachers.social_media_1',
                    'teachers.social_media_3',
                    'teachers.social_media_2',
                    'teachers.contact_1',
                    'teachers.contact_2',
                    'teachers.email'
                );


            $pagination = $teachers->paginate(12);
            return [
                'current_page' => $pagination->currentPage(),
                'last_page' => $pagination->lastPage(),
                'per_page' => $pagination->perPage(),
                'total' => $pagination->total(),
                'data' =>  SearchTeacherResource::collection($pagination->items())
            ];
        } catch (Exception $e) {
            Log::info($e->getMessage());
            throw new Exception('Error to search Product', 500);
        }
    }
}
