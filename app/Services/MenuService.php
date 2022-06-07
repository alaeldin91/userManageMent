<?php

namespace App\Services;

use App\Models\Menu;

class MenuService
{

    public function getMenuWithCatogry(array $resto_ido)
    {
        $catogries = Menu::whereIn('resto_id', $resto_ido)->get()->groupBy('catogry.name');
        return $catogries;
    }
}
