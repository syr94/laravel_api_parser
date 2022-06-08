<?php

namespace App\Http\Controllers\AlgorithmParameterValue;

use App\Http\Controllers\Controller;


class DeleteAlgorithmParameterValueController extends Controller
{
    public function __invoke()
    {
        return response()
        ->json([]);
    }
}