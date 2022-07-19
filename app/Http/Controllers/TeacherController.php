<?php

namespace App\Http\Controllers;

use App\Services\Teachers\GetDetailsToProfileService;
use App\Services\Teachers\GetListTeacherService;
use Exception;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function search(Request $request)
    {
        try {
            return response(GetListTeacherService::list($request), 200);
        } catch (Exception $e) {
            return response(['error' => $e, 'message' => $e->getMessage(),], $e->getCode() ?? 400);
        }
    }


    public function getProfile($teacherId)
    {
        try {
            return response(GetDetailsToProfileService::getProfile($teacherId), 200);
        } catch (Exception $e) {
            return response(['error' => $e, 'message' => $e->getMessage(),], $e->getCode() ?? 400);
        }
    }
}
