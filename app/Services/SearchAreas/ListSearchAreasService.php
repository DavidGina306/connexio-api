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
            $areas = SearchArea::all()->toArray();
            return new SearchArea($areas);
        } catch (Exception $e) {
            Log::error($e->getMessage());
            throw new Exception('Error to List SearchAreas', 500);
        }
    }
}
