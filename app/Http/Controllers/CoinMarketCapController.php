<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;

class CoinMarketCapController extends Controller
{
    public function index()
    {
        $response = HTTP::get('https://pro-api.coinmarketcap.com/v1/cryptocurrency/listings/latest', [
            'CMC_PRO_API_KEY' => config('coinmarketcap.api_key')
        ]);
        $data = $response->json();
        /* return $data['data']; */
        return view('criptomoneda.list')->with('data', $data['data']); 
    }
}
