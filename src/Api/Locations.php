<?php


namespace Mission11\Linnworks\Api;


class Locations extends ApiClient
{

    public function GetCountries()
    {
        return $this->get('Inventory/GetCountries');
    }

}
