<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Stevebauman\Location\Facades\Location;


class HomeController extends Controller
{
    //
    public function index()
    {
        try {
            if (Cache::has('newsData')) {
                $data = Cache::get('newsData');

            } else {
                $apiKey = config('services.newsdata.key'); /** API Key From Services by .env  */


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
                    Log::info('error:', ['Invalid or empty data']);
                    return view('errors.404');
                }

            }

            //     Cache::flush();

            // return $data;

            /**weather api */

            $weatherApiKey = config('services.weather.key');
            $weatherBaseUrl = config('services.weather.url');

            $responseFromWeatherApi = Http::get("$weatherBaseUrl/current.json?key=$weatherApiKey&q=Dhaka");

            if (!empty($responseFromWeatherApi)) {

                $weatherData = $responseFromWeatherApi->json();
            } else {
                /**error message */
            }

            return view('index', ['newsData' => $data, 'weatherData' => $weatherData]);

        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }

    }

    public function checker()
    {

        try {

            $ip = request()->ip();
            if ($position = Location::get($ip)) {
                // Successfully retrieved position.
                print_r($position);
                echo $position->countryName;
            } else {
                echo "Failed retrieving position.";
            }
            // $weatherApiKey = config('services.weather.key');
            // $weatherBaseUrl = config('services.weather.url');

            // $responseFromWeatherApi = Http::get("https://site.api.espn.com/apis/site/v2/sports/baseball/mlb/scoreboard");

            // if (!empty($responseFromWeatherApi)) {

            //     return $responseFromWeatherApi->json();

            // } else {
            //     return response()->json(['error' => "Data not found"], 500);
            // }
        } catch (\Throwable $e) {

            return response()->json(['error' => $e->getMessage()], 500);
        }

    }

}
