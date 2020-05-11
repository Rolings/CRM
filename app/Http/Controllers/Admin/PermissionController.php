<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Permission\PermissionRepository;
use Illuminate\Http\Request;
use App\Models\Permission;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Route;

class PermissionController extends Controller
{

    protected $model;
    protected $guards;

    public function __construct(Permission $permission)
    {
        $this->model = new PermissionRepository($permission);
        $this->guards = array_keys(config('auth.guards'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $model = $this->model->all();
        $routeCollection = collect(Route::getRoutes())
            ->map(function ($route) {
                return ([
                    'id' => null,
                    'route' => $route->getName(),
                    'guard_name' => null,
                    'description'=> null,
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

        $data = [
            'permissions' =>$routeCollection,
            'guardName' => $this->guards
        ];

        return view('admin.template.permission.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $guardName = $this->guards;
        return view('admin.template.permission.create', [
            'guardName' => $guardName
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->model->create($request->only(['route', 'guard_name']));
        return redirect()->route('admin.permissions.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = $this->model->find($id);
        $guardName = $this->guards;
        return view('admin.template.permission.edit', [
            'model' => $model,
            'guardName' => $guardName
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->model->update($request->only(['route', 'guard_name']),$id);
        return redirect()->route('admin.permissions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}