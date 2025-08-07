<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    //
    public function index()
    {
        try {
            if (Cache::has('newData')) {
                $data = Cache::get('newData');

            } else {
                $response = Http::get('https://newsdata.io/api/1/latest?apikey=pub_2d22a16c6713484ebc30c74ae980e741&q=pizza&language=en');

                $getData = $response->json();
                // return $getData;

                if (!empty($getData) && isset($getData['results'])) {
                    $data = $getData['results'];
                    Cache::put('newData', $data, 600);
                } else {
                    return response()->json(['error' => 'Invalid or empty data'], 500);
                }

            }
           // return $data;

            return view('index', ['newsData'=> $data]);

        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }

    }

}
