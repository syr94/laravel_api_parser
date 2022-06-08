<?php

namespace App\Http\Controllers\Catalogue;

use App\Http\Controllers\Controller;
use App\Models\Catalogue;

class ListCatalogueController extends Controller
{
    public function __construct(Catalogue $catalogue)
    {
        $this->catalogueModel = $catalogue;
    }

    public function __invoke()
    {
        return $this->catalogueModel->getAll();
    }
}