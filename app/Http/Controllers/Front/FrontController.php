<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;

class FrontController extends Controller
{


    public function index()
    {
        $menu = Menu::with('children')->get();
        dd($menu);
        return view('front.template.main.index');
    }
}
