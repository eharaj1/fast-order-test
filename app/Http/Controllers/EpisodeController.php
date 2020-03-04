<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EpisodeController extends Controller
{
    //

    public function getEpisode(Request $request){

    	$url = "http://api.tvmaze.com/schedule";
		$client = new \GuzzleHttp\Client();
		

		$response = $client->request('GET', $url);

		// url will be: http://my.domain.com/test.php?key1=5&key2=ABC;

		$statusCode = $response->getStatusCode();
		$content = json_decode($response->getBody(), true);

		// echo "<pre>";
		// print_r($content);die;

		$records = $content? array_slice($content, 0, 10):[];

    	return view('getShow', compact('records'));
    }
}
