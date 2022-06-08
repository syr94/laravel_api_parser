<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemPrice extends Model
{
    use HasFactory;

    protected $table = 'item_price';

    protected $fillable = [
        'item_id',
        'price',
        'parse_state_id'
    ];
}