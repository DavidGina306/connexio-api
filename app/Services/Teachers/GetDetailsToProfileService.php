<?php

namespace App\Services\Teachers;

use App\Http\Resources\GetProfileTeacherResource;
use App\Http\Resources\SearchTeacherResource;
use App\Teacher;
use Exception;
use Illuminate\Support\Facades\Log;

class GetDetailsToProfileService
{
    public static function getProfile($teacherId)
    {
        try {
            $teacher = Teacher::query()->findOrFail($teacherId);
            return new GetProfileTeacherResource($teacher);
        } catch (Exception $e) {
            Log::error($e->getMessage());
            throw new Exception('Error to search Teachers', 500);
        }
    }
}
