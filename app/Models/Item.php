<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $table = 'item';

    protected $fillable = [
        'id',
        'name',
        'url',
        'inner_site_id',
    ];

    public function getAll() 
    {
        return Item::query()
                    ->select('*')
                    ->join('item_price', 'item.item_id', '=', 'item_price.item_id')
                    ->get();
    }
}