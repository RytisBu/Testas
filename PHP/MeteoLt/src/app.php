<?php

use App\Classes\MeteoData;
use App\Classes\MeteoPlace;
use App\Classes\MeteoForecasts;

class main
{
    public function getPlaces()
    {
        $data = new MeteoData();

        return $data->getApiResponse();
    }

    public function getPlaceContent()
    {
        $place = new MeteoPlace('/' . $_GET['place']);

        return $place;
    }

    public function getForecasts($placeCode)
    {
        $forecasts = new MeteoForecasts($placeCode);

        return $forecasts->getForecasts();
    }
}
