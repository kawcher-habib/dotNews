<?php

namespace App\Http\Controllers\Tech;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class TechController extends Controller
{

    public function index()
    {
        // $response = Http::get('http://api.mediastack.com/v1/news?access_key=25bbd5fb0bccdadacac35e745ad562f5&languages=en&limit=15&categories=technology');

        try {
            // $getData = $response->json();

            if (Cache::has('newsData')) {

                $getData = Cache::get('newsData');


                return view('tech/index', ['newsData' => $getData]);
            }

        } catch (\Exception $e) {
            return response()->json([$e->getMessage()], 500);
        }
    }
}
