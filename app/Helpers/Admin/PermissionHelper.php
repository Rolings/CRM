<?php


namespace App\Helpers\Admin;


use Illuminate\Support\Facades\Route;

class PermissionHelper
{

    public static function getRouteCollectionFoRole($model)
    {
        $routeCollection = collect(Route::getRoutes())
            ->map(function ($route) {
                return ([
                    'id' => null,
                    'route' => $route->getName(),
                    'guard_name' => null,
                    'description' => null,
                    'created_at' => null,
                    'updated_at' => null,
                ]);
            })
            ->filter(function ($value) {
                return $value['route'] ?? false;
            });

        $existRoute = $model->pluck('route')->toArray();
        $routeCollection = $routeCollection->map(function ($item, $key) use ($existRoute) {
            return !in_array($item['route'], $existRoute) ? $item : null;
        })->filter(function ($value) {
            return $value['route'] ?? false;
        });
        $model->reduce(function ($carry, $item) use (&$routeCollection) {
            $routeCollection->push($item->toArray());
        });
        $routeCollection = collect($routeCollection->map(function ($value) {
            return (object)$value;
        }))
            ->sortBy(['route'])
            ->unique('route');
        return $routeCollection;
    }

}