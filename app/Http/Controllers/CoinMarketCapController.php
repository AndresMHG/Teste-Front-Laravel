<?php

namespace App\Http\Controllers;

use App\Services\CoinMarketCapService;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;

class CoinMarketCapController extends Controller
{
    public function index(CoinMarketCapService $coinMarketService)
    {
        $list = $coinMarketService->getLatestCryptoCoinList();
        if (is_null($list)) {
            abort(400);
        }

        return view('dashboard')->with('data', $list);
    }
}
