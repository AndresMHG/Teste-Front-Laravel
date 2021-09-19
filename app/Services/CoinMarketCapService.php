<?php

namespace App\Services;

use Exception;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Client\Response as ResponseRes;

class CoinMarketCapService
{
    private $apikey;
    private $apiHost;

    function __construct()
    {
        $this->apikey = config('coinmarketcap.api_key');
        $this->apiHost = config('coinmarketcap.api_host');
    }

    // if everything is OK, return array if something fails return null.
    function getLatestCryptoCoinList()
    {

        $headers = ['X-CMC_PRO_API_KEY' => $this->apikey];
        try {
            $response = HTTP::withHeaders($headers)->get(
                "{$this->apiHost}/v1/cryptocurrency/listings/latest"
            );
        } catch (Exception $ex) {
            Log::error("CoinMarketCapService::HTTPClient - {$ex->getMessage()}");
            return null;
        }
        if ($response->status() === 200) {
            $data = $response->json();
            return $data['data'];
        } else {
            $this->logResponseErrors($response);
            return null;
        }
    }

    private function logResponseErrors($response)
    {
        $status = $response->json()['status'];
        Log::error("CoinMarketCapService:: Error requesting list -
                status code: {$response->status()},
                message: {$status['error_message']}");
    }
}