<?php


namespace App\Helpers\Admin;
use App\Models\Menu;

class MenuHelpers
{

    public static function menu(){
        return Menu::all();
    }



}