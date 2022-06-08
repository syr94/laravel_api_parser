<?php

namespace App\Http\Controllers\AlgorithmParameter;

use App\Http\Controllers\Controller;
use App\Models\Algorithm;

class CreateAlgorithmParameterController extends Controller
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
