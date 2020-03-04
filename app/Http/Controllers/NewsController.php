<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp;
class NewsController extends Controller
{
    //

    public function getNews(Request $request){

    	$url = "http://hn.algolia.com/api/v1/search";
		$client = new \GuzzleHttp\Client();
		$query = "Hacker";
		$tags = "story";

		$response = $client->request('GET', $url, ['query' => [
		    'query' => $query, 
		    'tags' => $tags,
		]]);

		// url will be: http://my.domain.com/test.php?key1=5&key2=ABC;

		$statusCode = $response->getStatusCode();
		$content = json_decode($response->getBody(), true);

		// echo "<pre>";
		// print_r($content['hits']);die;

		$records = $content['hits']? array_slice($content['hits'], 0, 10):[];

    	return view('getNews', compact('records'));
    }
}
