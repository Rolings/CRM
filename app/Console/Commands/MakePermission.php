<?php

namespace App\Console\Commands;

use App\Helpers\Admin\PermissionHelper;
use App\Models\Permission;
use App\Models\Role;
use App\Repositories\Permission\PermissionRepository;
use Illuminate\Console\Command;

class MakePermission extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'permission:admin';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Auto create permission for root';

    protected $model;
    protected $guards;
    protected $role;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(Permission $permission)
    {
        parent::__construct();
        $this->model = new PermissionRepository($permission);
        $this->guards = array_keys(config('auth.guards'));
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $model = $this->model->all();
        $routeCollection = PermissionHelper::getRouteCollectionFoRole($model);

        foreach ($routeCollection as $route) {
            $this->model->create(['route' => $route->route, 'guard_name' => 1]);
        }

        Role::isRoot()
            ->first()
            ->permissions()
            ->attach($this->model->all()->pluck('id'));

    }
}
