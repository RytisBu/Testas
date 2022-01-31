<?php

namespace App\Classes;

use App\Classes\MeteoData;

class MeteoForecasts
{
    public $forecastsData;

    function __construct($place = 'vilnius')
    {
        $this->forecastsData = new MeteoData('/' . $place . '/forecasts/long-term');
    }

    public function getForecasts()
    {
        return $this->forecastsData->getApiResponse();
    }
}