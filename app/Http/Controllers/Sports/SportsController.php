<?php

namespace App\Http\Controllers\Sports;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SportsController extends Controller
{
    public function index(){

        try {
            $response = Http::get('http://api.mediastack.com/v1/news?access_key=25bbd5fb0bccdadacac35e745ad562f5&languages=en&limit=15&categories=sports');
            return $response->json();
        } catch (\Throwable $th) {
            return response()->json(['error'=> $th->getMessage()], 500);
        }
    }
}
