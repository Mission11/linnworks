<?php


namespace Mission11\Linnworks\Api;

class ReturnsRefunds extends ApiClient
{
    public function getWarehouseLocations()
    {
        return $this->get('ReturnsRefunds/GetWarehouseLocations');
    }
}
