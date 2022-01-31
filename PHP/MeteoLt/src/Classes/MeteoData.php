<?php

namespace App\Classes;

class MeteoData
{
    public $urlPath;

    public function __construct(string $urlPath = '')
    {
        $this->urlPath = METEO_API . $urlPath;
    }

    public function getApiResponse()
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->urlPath);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);
        curl_close($ch);

        return json_decode($output);
    }
}