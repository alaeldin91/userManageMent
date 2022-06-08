<?php

namespace App\Services;

use App\Models\Menu;

class MenuService
{

    public function getMenuWithCatogry($restoId)
    {
        $catogries = Menu::where('resto_id',$restoId)->get()->groupBy('catogry.name');
        return $catogries;
    }
}
