<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class PlayerInfoController extends Controller
{
    public function playerInfo() {
        return view('playerInfo');
    }


    public function getAllPlayers()
    {
        $client = new Client();
        $url = "https://dartuser-api-st6rnqmhea-uc.a.run.app/allPlayers";

        $response = $client->request('GET', $url, [
            'verify'  => false,
        ]);

        $responseBody = json_decode($response->getBody(), true);

        // dd($responseBody);

        return $responseBody;
    }

    public function getPlayerById($id)
    {
        $client = new Client();
        $url = "https://dartuser-api-st6rnqmhea-uc.a.run.app/id/".$id;

        $response = $client->request('GET', $url, [
            'verify'  => false,
        ]);

        $responseBody = json_decode($response->getBody(), true);

        // dd($responseBody);

        return $responseBody;
    }

    public function getClosestAvg($avg)
    {
        $client = new Client();
        $url = "https://pythonflaskrestservice.herokuapp.com/getAvg/".$avg;

        $response = $client->request('GET', $url, [
            'verify'  => false,
        ]);

        $responseBody = json_decode($response->getBody(), true);

        // dd($responseBody['players']);

        $randomValue = array_rand($responseBody['players']);

        // dd($responseBody['players'][$randomValue]);

        $person = $responseBody['players'][$randomValue];
        return $person;
    }
    
}
