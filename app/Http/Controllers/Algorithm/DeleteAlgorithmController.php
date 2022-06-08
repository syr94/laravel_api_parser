<?php

namespace App\Http\Controllers\Algorithm;

use App\Http\Controllers\Controller;


class DeleteAlgorithmController extends Controller
{
    public function __invoke()
    {
        return response()
        ->json([]);
    }
}