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
            if (Cache::has('newsData')) {
                $getData = Cache::get('newsData');
                return view('sports/index', ['newsData' => $getData]);
            }
            
        } catch (\Throwable $th) {
            return response()->json(['error' => $th->getMessage()], 500);
        }
    }
}
