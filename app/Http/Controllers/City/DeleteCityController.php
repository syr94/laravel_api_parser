<?php

namespace App\Http\Controllers\City;

use App\Http\Controllers\Controller;


class DeleteCityController extends Controller
{
    public function __invoke()
    {
        return response()
        ->json([]);
    }
}