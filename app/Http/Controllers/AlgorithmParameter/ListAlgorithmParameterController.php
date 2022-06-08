<?php

namespace App\Http\Controllers\AlgorithmParameter;

use App\Http\Controllers\Controller;
use App\Models\AlgorithmParameter;

class ListAlgorithmParameterController extends Controller
{
    public function __construct(AlgorithmParameter $algorithmParameter)
    {
        $this->algorithmParameterModel = $algorithmParameter;
    }

    public function __invoke()
    {
        return $this->algorithmParameterModel->getAll();
    }
}