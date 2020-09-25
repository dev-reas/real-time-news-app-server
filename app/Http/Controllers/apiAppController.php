<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use GuzzleHttp\Message\Response;
use Illuminate\Support\Facades\View;
use Carbon\Carbon;

class apiAppController extends Controller
{
    public function index(Request $request)
    {   
        $res = Http::get('https://api.covid19api.com/summary');

        $response = $res->json();
        $date = $response['Date'];

        foreach($response['Countries'] as $Countries)
        {
            if($Countries['Country'] == 'Philippines')
            {
                $TotalConfirmed = $Countries['TotalConfirmed'];
                $TotalDeaths = $Countries['TotalDeaths'];
                $TotalRecovered = $Countries['TotalRecovered'];
                $NewConfirmed = $Countries['NewConfirmed'];
            }
        }

        return response()->json([
                                 'TotalConfirmed' => $TotalConfirmed,
                                 'TotalDeaths' => $TotalDeaths, 
                                 'TotalRecovered' => $TotalRecovered, 
                                 'NewConfirmed' => $NewConfirmed,
                                 'Date' => Carbon::parse($date)->diffForHumans(),
                                ]);
    }
}
