<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use GuzzleHttp\Message\Response;
use Illuminate\Support\Facades\View;

class apiNewsAppController extends Controller
{
    public function index(Request $request)
    {   
        $response = Http::get('http://newsapi.org/v2/top-headlines?country=ph&apiKey=f4a2965964d9408c8fb46fd3359e8faf');
        $responseNews = $response->json();
        $array = array();
        
        foreach($responseNews['articles'] as $message)
        {   
            $title[] = $message['title'];
            $description[] = $message['description'];
            $content[] = $message['content'];
            $urlToImage[] = $message['urlToImage'];
            $url[] = $message['url'];
            $publishedAt[] = $message['publishedAt'];
        }

        for($i = 0; $i < 7; $i++)
        {
            $array[$i] = [
                'title' => $title[$i],
                'description' => $description[$i],
                'content' => $content[$i],
                'urlToImage' => $urlToImage[$i],
                'url' => $url[$i],
                'publishedAt' => date('M j, Y H:i', strtotime($publishedAt[$i])),
                'id' => $i,
            ];
        }
        return response()->json([
            "0" => $array[0],
            "1" => $array[1],
            "2" => $array[2],
        ]);
    }

    public function all()
    {
        $resNews = Http::get('http://newsapi.org/v2/top-headlines?country=ph&apiKey=f4a2965964d9408c8fb46fd3359e8faf');

        $responseNews = $resNews->json();

        $allNews = array();

        foreach($responseNews['articles'] as $messages)
		{   
			$allNews[] = array(
				'title' => $messages['title'],
				'description' => $messages['description'],
				'content' => $messages['content'],
				'urlToImage' => $messages['urlToImage'],
				'url' => $messages['url'],
				'publishedAt' => date('M j, Y H:i', strtotime($messages['publishedAt'])),
			);
        }
        
        return response()->json($allNews);
    }
}
