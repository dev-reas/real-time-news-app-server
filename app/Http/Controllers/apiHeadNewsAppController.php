<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use GuzzleHttp\Message\Response;
use Illuminate\Support\Facades\View;

class apiHeadNewsAppController extends Controller
{
    public function index(Request $request)
    {
        $responseHead = Http::get('https://covid19-us-api.herokuapp.com/news');
        $responseHeadNews = $responseHead->json();
        $HeadArray = array();

        foreach($responseHeadNews['message'] as $message)
		{
			$title[] = $message['title'];
	        $published[] = $message['published'];
			$url[] = $message['url'];
        }

        for($i = 0; $i < 7; $i++)
        {
            $HeadArray[$i] = [
                'title' => $title[$i],
                'url' => $url[$i],
                'published' => $published[$i],
                'id' => $i,
            ];
        }

        return response()->json([
            "0" => $HeadArray[0],
            "1" => $HeadArray[1],
            "2" => $HeadArray[2],
        ]);
    }

    public function all()
    {
        $responseHead = Http::get('https://covid19-us-api.herokuapp.com/news');

        $resHeadNews = $responseHead->json();

        $allHead = array();

        foreach($resHeadNews['message'] as $message)
		{
			$allHead[] = array(
				'title' => $message['title'],
	            'published' => $message['published'],
				'url' => $message['url'],
			);
        }
        
        return response()->json($allHead);
    }
}
