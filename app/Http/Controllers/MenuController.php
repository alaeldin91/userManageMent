<?php

namespace App\Http\Controllers;

use App\Models\Catogry;
use App\Models\Menu;
use App\Rules\RestCatogryValidator;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function saveMenuItem(Request $request)
    {

        $postData =    $this->validate($request, [
            'restoId' => 'required|numeric',
            'catogry' => 'required',
            'price' => 'required|numeric',
            'item' => ['required']
        ]);
        $catogry =Catogry::where('resto_id',$postData['restoId'])->where('name',$postData['catogry'])->first();
        $menu = Menu::create([
            'name'=> $postData['item'],
            'price'=> $postData['price'],
            'resto_id'=> $postData['restoId'],
             'catogry_id' => $catogry->id
        ]);
        return response()->json($menu,201);
    }
}
