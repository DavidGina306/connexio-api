<?php

namespace App\Services\SearchAreas;

use App\Http\Resources\SearchAreaResource;
use App\SearchArea;
use Exception;
use Illuminate\Support\Facades\Log;

class ListSearchAreasService
{
    public static function list()
    {
        try {
            $areas = SearchArea::all();
            return SearchAreaResource::collection($areas);
        } catch (Exception $e) {
            Log::error($e->getMessage());
            throw new Exception('Error to List SearchAreas', 500);
        }
    }
}
