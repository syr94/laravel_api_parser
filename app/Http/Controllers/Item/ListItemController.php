<?php

namespace App\Http\Controllers\Item;

use App\Http\Controllers\Controller;
use App\Models\Item;

class ListItemController extends Controller
{
    public function __construct(Item $item)
    {
        $this->itemModel = $item;
    }

    public function __invoke()
    {
        return $this->itemModel->getAll();
    }
}