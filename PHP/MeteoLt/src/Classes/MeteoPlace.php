<?php

namespace App\Classes;

use App\Classes\MeteoData;

class MeteoPlace
{
    public $code;
    public $name;
    public $administrativeDivision;
    public $countryCode;
    public $coordinates = [];

    public function __construct(string $urlPath)
    {
        $request                      = new MeteoData($urlPath);
        $response                     = $request->getApiResponse();
        $this->code                   = $response->code;
        $this->name                   = $response->name;
        $this->administrativeDivision = $response->country;
        $this->countryCode            = $response->countryCode;
        $this->coordinates            = $response->coordinates;
    }

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getAdministrativeDivision()
    {
        return $this->administrativeDivision;
    }

    /**
     * @return mixed
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * @return mixed
     */
    public function getCoordinates()
    {
        return $this->coordinates;
    }
}