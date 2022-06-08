<?php

namespace App\Http\Controllers\City;

use App\Http\Controllers\Controller;
use App\Models\City;

class ListCityController extends Controller
{
    public function __construct(City $city)
    {
        $this->cityModel = $city;
    }

    public function __invoke()
    {
        return $this->cityModel->getAll();
    }
}