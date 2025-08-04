<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    //
    public function index(){
        $response = Http::get('http://api.mediastack.com/v1/news?access_key=25bbd5fb0bccdadacac35e745ad562f5');

        try{
             $getData = $response->json();
             return $getData['data'];

        //    return view('index', ['newsData'=> $getData['data']]);

        }catch(\Exception $e){
            return response()->json(['error'=> $e->getMessage()], 500);
        }
       
        // return $jsonData;
    }

}
