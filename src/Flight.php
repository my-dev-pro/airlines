<?php
namespace Mydev\Airlines;

use Mydev\Airlines\Client;

class Flight
{
    public function getFlights($start, $distination, $date = date('Ymd'))
    {
        $apikey = '';
        
        $url = "https://api.flightapi.io/trackbyroute/{$apikey}?date={$date}&airport1={$start}&airport2={$distination}";

        $client = new Client();
        return $client->get($url);
    }
}