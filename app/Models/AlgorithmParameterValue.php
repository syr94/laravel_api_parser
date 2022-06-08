<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlgorithmParameterValue extends Model
{
    use HasFactory;

    protected $table = 'algorithm_parameter_value';

    protected $fillable = [
        'algorithm_parameter_value_id',
        'site_city_id',
        'algorithm_parameter_id',
        'parameter_value'
    ];

    public function algorithm_parameter()
    {
        return $this->belongsTo(AlgorithmParameter::class, 'algorithm_parameter_id', 'id');
    }

    public function getAll() 
    {
        return AlgorithmParameterValue::query()
                    ->select('*')
                    ->get();
    }

    public function getById(int $algorithm_parameter_value_id) 
    {
        return AlgorithmParameterValue::query()
                    ->select('*')
                    ->where('algorithm_parameter_value_id', $algorithm_parameter_value_id)
                    ->get();
    }

}