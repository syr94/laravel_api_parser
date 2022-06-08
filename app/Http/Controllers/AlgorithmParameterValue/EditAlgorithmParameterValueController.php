<?php

namespace App\Http\Controllers\AlgorithmParameterValue;

use App\Http\Controllers\Controller;
use App\Models\AlgorithmParameterValue;
use App\Request\CreateAlgorithmParameterValueRequest;

class EditAlgorithmParameterValueController extends Controller
{
    public function __construct(AlgorithmParameterValue $algorithmParameterValue)
    {
        $this->algorithmParameterValueModel = $algorithmParameterValue;
    }

    public function __invoke($algorithm_parameter_value_id)
    {
        return $this->algorithmParameterValueModel
                ->getById($algorithm_parameter_value_id);
    }

    public function updateAlgorithmParameter(
        CreateAlgorithmParameterValueRequest $request,
         int $algorithm_parameter_value_id
         )
    {
        $algorithm = Algorithm::findOrFail($algorithm_parameter_value_id);
        $data = $request->validated();

        if ($algorithm_parameter_value->update($data))
        {
            $path = "/algorithm_parameter_value/".$algorithm_parameter_value_id."/edit";
            return redirect($path);
        }
    }
}