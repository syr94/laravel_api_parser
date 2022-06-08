<?php

namespace App\Http\Controllers\AlgorithmParameterValue;

use App\Http\Controllers\Controller;
use App\Models\AlgorithmParameterValue;

class ListAlgorithmParameterValueController extends Controller
{
    public function __construct(AlgorithmParameterValue $algorithmParameterValue)
    {
        $this->algorithmParameterValueModel = $algorithmParameterValue;
    }

    public function __invoke()
    {
        return $this->algorithmParameterValueModel->getAll();
    }
}