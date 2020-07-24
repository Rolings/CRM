<?php

namespace App\Http\Controllers\Admin;
use App\Models\Role;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Repositories\Permission\RoleRepository;
use Illuminate\Http\Request;
use App\Repositories\User\UserRepositories;
use Illuminate\Support\Facades\Hash;
use App\Helpers\Admin\UserHelper;

class UserController extends Controller
{
    protected $model;
    protected $roles;

    public function __construct(User $user,Role $role)
    {
        $this->model = new UserRepositories($user);
        $this->roles = new RoleRepository($role);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'users'=>$this->model->all()
        ];
        return view('admin.template.users.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'roles'=> $this->roles->all()
        ];
        return view('admin.template.users.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [
            'first_name',
            'last_name',
            'email',
            'role_id',
            'phone',
            'active',
            'notification',
        ];
        if (!is_null($request->password) && ($request->password === $request->confirm_password)) {
            $data = array_merge($data, ['password']);
        }

        $request->merge(['active' => $request->active??0]);
        $request->merge(['notification' => $request->notification??0]);

       $user =  $this->model->create($request->only($data));
        if ($request->hasFile('avatar')) {
            UserHelper::saveUserAvatar($request, $this->model, $user->id);
        }
        return redirect()->route('admin.users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = [
            'user'=>$this->model->show($id)
        ];
        return view('admin.template.users.show',$data);
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
        return view('admin.template.users.edit',[
            'model'         => $model,
            'roles'=> $this->roles->all()
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
        $data = [
            'first_name',
            'last_name',
            'email',
            'role_id',
            'phone',
            'active',
            'notification',
        ];
        if (!is_null($request->password) && ($request->password === $request->confirm_password)) {
            $data = array_merge($data, ['password']);
        }
        $request->merge(['active' => $request->active ?? false]);
        $request->merge(['notification' => $request->notification ?? false]);

        $this->model->update($request->only($data), $id);
        if ($request->hasFile('avatar')) {
            UserHelper::saveUserAvatar($request, $this->model, $id);
        }
        return redirect()->route('admin.users.index');
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
