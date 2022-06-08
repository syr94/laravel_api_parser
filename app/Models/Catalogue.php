<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catalogue extends Model
{
    use HasFactory;

    protected $table = 'catalogue';

    protected $fillable = [
        'catalogue_id',
        'name',
        'url',
        'site_city_id',
        'actual'
    ];

    public function getAll() 
    {
        return Algorithm::query()
                    ->select('*')
                    ->get();
    }
}