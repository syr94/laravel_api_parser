<?php

namespace App\Http\Controllers\City;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Request\CreateCityRequest;

class EditCityController extends Controller
{
    public function __construct(City $city)
    {
        $this->cityModel = $city;
    }

    public function __invoke($city_id)
    {
        return $this->cityModel->getById($city_id);
    }

    public function updateCity(CreateCityRequest $request, int $city_id)
    {
        $city = City::findOrFail($city_id);
        $data = $request->validated();

        if ($algorithm->update($data))
        {
            $path = "/city/".$algorithm_id."/edit";
            return redirect($path);
        }
    }
}