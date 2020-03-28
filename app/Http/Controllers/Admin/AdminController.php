<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;

class AdminController extends Controller
{
    public function index($alias)
    {
        $menu = Menu::whereAlias($alias)->first();
        $data = compact('menu');
        return view('admin.template.'.$alias.'.index',$data);
    }
}
