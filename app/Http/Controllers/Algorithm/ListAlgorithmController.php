<?php

namespace App\Http\Controllers\Algorithm;

use App\Http\Controllers\Controller;
use App\Models\Algorithm;

class ListAlgorithmController extends Controller
{
    public function __construct(Algorithm $algorithm)
    {
        $this->algorithmModel = $algorithm;
    }

    public function __invoke()
    {
        return $this->algorithmModel->getAll();
    }

    public function getAlgorithmWithParameters(int $algorithm_id)
    {
        return $this->algorithmModel->getAlgorithmWithParameters($algorithm_id);
    }

    public function getAllAlgorithmsWithParameters()
    {
        return $this->algorithmModel->getAllAlgorithmsWithParameters();
    }
}