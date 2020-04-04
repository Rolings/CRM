<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Admin\MenuHelpers;
use App\Http\Controllers\Controller;
use App\Models\Menu;

class AdminController extends Controller
{
    public function index($alias)
    {
        return view('admin.template.'.$alias.'.index');
    }
}
