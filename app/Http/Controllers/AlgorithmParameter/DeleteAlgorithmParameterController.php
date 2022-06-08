<?php

namespace App\Http\Controllers\AlgorithmParameter;

use App\Http\Controllers\Controller;


class DeleteAlgorithmParameterController extends Controller
{
    public function __invoke()
    {
        return response()
        ->json([]);
    }
}