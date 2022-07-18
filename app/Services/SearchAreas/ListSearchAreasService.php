<?php

namespace App\Services\SearchAreas;
use App\SearchArea;
use Exception;
use Illuminate\Support\Facades\Log;

class ListSearchAreasService
{
    public static function list()
    {
        try {
            $areas = SearchArea::all();
            return $areas->pluck('name', 'id');
        } catch (Exception $e) {
            Log::error($e->getMessage());
            throw new Exception('Error to List SearchAreas', 500);
        }
    }
}
