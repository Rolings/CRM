<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;

class FrontController extends Controller
{


    public function index()
    {
/*        $allMenu =  Menu::with(['children']);

        $catalog= $allMenu->whereHas('parent',function ($query){
                return $query->where('alias','katalog');
            })->get();
        $findMenu = $allMenu->where('alias','instrumenti-i-vitratni-materiali')->first();*/
        return view('front.template.main.index');
    }
}
