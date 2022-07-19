<?php

namespace App\Http\Controllers;

use App\Services\SearchAreas\ListSearchAreasService;
use Exception;

class SearchAreasController extends Controller
{
    public function list()
    {
        try {
            return response(ListSearchAreasService::list(), 200);
        } catch (Exception $e) {
            return response(['error' => $e, 'message' => $e->getMessage(),], $e->getCode() ?? 400);
        }
    }
}
