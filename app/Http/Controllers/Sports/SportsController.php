<?php

namespace App\Http\Controllers\Sports;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class SportsController extends Controller
{
    public function index()
    {

        try {
            if (Cache::has('sportsData')) {
                $getData = Cache::get('sportsData');
            } {
                $response = Http::get('https://site.api.espn.com/apis/site/v2/sports/football/nfl/news');
                if (!empty($response)) {
                    $getData = $response['articles'];
                    Cache::put('sportsData', $getData, 600);
                }

            }
            // Cache::flush();
            return view('sports/index', ['newsData' => $getData]);


        } catch (\Throwable $th) {
            return response()->json(['error' => $th->getMessage()], 500);
        }
    }
}
