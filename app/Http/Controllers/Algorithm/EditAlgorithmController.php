<?php

namespace App\Http\Controllers\Algorithm;

use App\Http\Controllers\Controller;
use App\Models\Algorithm;
use App\Request\CreateAlgorithmRequest;

class EditAlgorithmController extends Controller
{
    public function __construct(Algorithm $algorithm)
    {
        $this->algorithmModel = $algorithm;
    }

    public function __invoke($algorithm_id)
    {
        return $this->algorithmModel->getById($algorithm_id);
    }

    public function updateAlgorithm(CreateAlgorithmRequest $request, int $algorithm_id)
    {
        $algorithm = Algorithm::findOrFail($algorithm_id);
        $data = $request->validated();

        if ($algorithm->update($data))
        {
            $path = "/algorithm/".$algorithm_id."/edit";
            return redirect($path);
        }
    }
}