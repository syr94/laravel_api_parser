<?php

namespace App\Http\Controllers\Algorithm;

use App\Http\Controllers\Controller;
use App\Models\Algorithm;

class CreateAlgorithmController extends Controller
{
    public function __construct(Algorithm $algorithm)
    {
        $this->algorithmModel = $algorithm;
    }

    public function __invoke(CreateAlgorithmRequest $request, AlgorithmService $service)
    {
        if($this->dispatch(new CreateAlgorithmJob($data))) {
            return redirect(route('user_profile', auth('web')->user()->id))->with(['post_create_success' => 'Post successfully created']);
        }
    }
}
