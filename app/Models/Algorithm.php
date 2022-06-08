<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Algorithm extends Model
{
    use HasFactory;

    protected $table = 'algorithm';

    protected $fillable = [
        'algorithm_id',
        'algorithm_type',
        'algorithm_class_name',
        'algorithm_description'
    ];

    public function getAll() 
    {
        return Algorithm::query()
                    ->select('*')
                    ->get();
    }

    public function getById(int $algorithm_id) 
    {
        return Algorithm::query()
                    ->select('*')
                    ->where('algorithm_id', $algorithm_id)
                    ->get();
    }

    public function getAlgorithmWithParameters(int $algorithm_id) 
    {
        return Algorithm::query()
                    ->select('*')
                    ->join('algorithm_parameter', 'algorithm.algorithm_id', '=', 'algorithm_parameter.algorithm_id')
                    ->where('algorithm.algorithm_id', $algorithm_id)
                    ->get();
    }

    public function getAllAlgorithmsWithParameters() 
    {
        return Algorithm::query()
                    ->select('*')
                    ->join('algorithm_parameter', 'algorithm.algorithm_id', '=', 'algorithm_parameter.algorithm_id')
                    ->get();
    }

}
