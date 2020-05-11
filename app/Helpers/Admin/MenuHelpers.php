<?php


namespace App\Helpers\Admin;
use App\Models\Menu;
use Illuminate\Support\Facades\Route;

class MenuHelpers
{

    public static function menu()
    {
        return Menu::with(['children','parent'])->isActive()->orderBy('order','ASC')->get();
    }

    public static function childHasMenu($route)
    {
        if (!empty($route)) {
            $alias = $route->pluck('alias')->map(function ($name) {
                return 'admin.' . $name . '.index';
            })->toArray();
            return in_array(Route::getCurrentRoute()->getName(), $alias) ? true: false;
        }
        return false;
    }

}