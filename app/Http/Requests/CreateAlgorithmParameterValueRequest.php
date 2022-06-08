<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateAlgorithmParameterValueRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;//auth('web')->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'algorithm_parameter_value_id' => ['required'],
            'site_city_id' => ['required'],
            'algorithm_parameter_id' => ['required'],
            'parameter_value' => ['required', 'string']
        ];
    }

}