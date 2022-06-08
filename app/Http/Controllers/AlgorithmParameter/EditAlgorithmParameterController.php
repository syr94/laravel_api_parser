<?php

namespace App\Http\Controllers\AlgorithmParameter;

use App\Http\Controllers\Controller;
use App\Models\AlgorithmParameter;
use App\Request\CreateAlgorithmParameterRequest;

class EditAlgorithmParameterController extends Controller
{
    public function __construct(AlgorithmParameter $algorithmParameter)
    {
        $this->algorithmParameterModel = $algorithmParameter;
    }

    public function __invoke($algorithm_parameter_id)
    {
        return $this->algorithmParameterModel->getById($algorithm_parameter_id);
    }

    public function updateAlgorithmParameter(
        CreateAlgorithmParameterRequest $request,
         int $algorithm_parameter_id
         )
    {
        $algorithm = Algorithm::findOrFail($algorithm_id);
        $data = $request->validated();

        if ($algorithm_parameter->update($data))
        {
            $path = "/algorithm_parameter/".$algorithm_parameter_id."/edit";
            return redirect($path);
        }
    }
}