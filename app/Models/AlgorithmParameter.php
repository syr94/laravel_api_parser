<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlgorithmParameter extends Model
{
    use HasFactory;

    protected $table = 'algorithm_parameter';

    protected $fillable = [
        'algorithm_parameter_id',
        'parameter_name',
        'algorithm_id',
        'necessarily'
    ];

    public function algorithm()
    {
        return $this->belongsTo(Algorithm::class, 'algorithm_id', 'id');
    }

    public function getAll() 
    {
        return AlgorithmParameter::query()
                    ->select('*')
                    ->get();
    }

    public function getById(int $algorithm_parameter_id) 
    {
        return AlgorithmParameter::query()
                    ->select('*')
                    ->where('algorithm_parameter_id', $algorithm_parameter_id)
                    ->get();
    }

}