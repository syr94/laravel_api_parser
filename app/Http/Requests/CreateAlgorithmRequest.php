<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateAlgorithmRequest extends FormRequest
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
            'algorithm_id' => [],
            'algorithm_type' => ['required', 'string'],
            'algorithm_class_name' => ['required', 'string'],
            'algorithm_description' => ['required', 'string']
        ];
    }
    /* 
    protected function prepareForValidation()
    {
        $this->merge([
            'user_id' => auth('web')->user()->id
        ]);
    }
    */
}
