<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Admin\RouteHelper;
use App\Http\Controllers\Controller;
use App\Repositories\Permission\PermissionRepository;
use Illuminate\Http\Request;
use App\Models\Permission;
use App\Helpers\Admin\PermissionHelper;

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
        $routeCollection = PermissionHelper::getRouteCollectionFoRole($model);

        $data = [
            'permissions' => $routeCollection,
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
        $permission = $this->model->create($request->only(['route', 'guard_name']));

        return RouteHelper::getRedirect($request, $permission->id, 'admin.permissions');
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
        return RouteHelper::getRedirect($request,$id, 'admin.permissions');
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
