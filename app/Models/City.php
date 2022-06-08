<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $table = 'city';

    protected $fillable = [
        'city_id',
        'name',
        'region'
    ];

    public function getAll() 
    {
        return City::query()
                    ->select('*')
                    ->get();
    }

    public function getById(int $city_id) 
    {
        return City::query()
                    ->select('*')
                    ->where('city_id', $city_id)
                    ->get();
    }

}
