<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use App\Models\Role;
use App\Repositories\Permission\PermissionRepository;
use App\Repositories\Permission\RoleRepository;
use Illuminate\Http\Request;
use App\Helpers\Admin\RouteHelper;

class RoleController extends Controller
{

    protected $model;
    protected $permission;
    protected $guards;

    public function __construct(Role $role,Permission $permission)
    {
        $this->model = new RoleRepository($role);
        $this->permission = new PermissionRepository($permission);
        $this->guards = array_keys(config('auth.guards'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'roles'=>$this->model->all(),
            'guardName' => $this->guards
        ];
        return view('admin.template.role.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'permissions'=> $this->permission->all()->sortBy('route'),
            'guardName' => $this->guards
        ];
        return view('admin.template.role.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->merge(['active' => $request->active ?? 0]);
        $model = $this->model->create($request->only(['name', 'guard_name', 'active']));
        if (isset($request->permission)) {
            $this->model->find($model->id)->permissions()->attach($request->permission);
        }

        return RouteHelper::getRedirect($request, $model->id, 'admin.roles');
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
        $model = $this->model->with(['permissions'])->find($id);
        return view('admin.template.role.edit', [
            'model'         => $model,
            'permissions'   => $this->permission->all()->sortBy('route'),
            'guardName'     => $this->guards
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
        $request->merge(['active' => $request->active ?? 0]);
        $this->model->update($request->only(['name', 'guard_name', 'active']), $id);
        $role = $this->model->find($id);
        if (isset($request->permission)) {
            $role->permissions()->sync($request->permission);
        } else {
            $role->permissions()->detach();
        }
        return RouteHelper::getRedirect($request, $id, 'admin.roles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->model->delete($id);
        return redirect()->route('admin.roles.index');
    }
}
