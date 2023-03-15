<?php

namespace App\Services\CarFullService;

use App\Services\CarParking\CarParking;
use App\Services\CarWashing\CarWashing;

class CarFullService
{
    private CarParking $carparking;
    private CarWashing $carWashing;

    public function __construct(CarParking $carParking, CarWashing $carWashing)
    {
        $this->carparking = $carParking;
        $this->carWashing = $carWashing;
    }

    public function search()
    {
        return $this->carparking->showParkingStatus();
    }

}
