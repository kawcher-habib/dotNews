<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;


class HomeController extends Controller
{
    //
    public function index()
    {
        try {
            if (Cache::has('newsData')) {
                $data = Cache::get('newsData');

            } else {
                $apiKey = config('services.newsdata.key'); /** API Key From Services  */


                $response = Http::get(
                    'https://newsdata.io/api/1/latest',
                    [
                        'apikey' => $apiKey,
                        'q' => 'pizza',
                        'language' => 'en'
                    ]
                );

                $getData = $response->json();
                // return $getData;

                if (!empty($getData) && isset($getData['results'])) {
                    $data = $getData['results'];
                    Cache::put('newsData', $data, 600);
                } else {
                    return response()->json(['error' => 'Invalid or empty data'], 500);
                }

            }

            //     Cache::flush();

            // return $data;

            return view('index', ['newsData' => $data]);

        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }

    }

}
