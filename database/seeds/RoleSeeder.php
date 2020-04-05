<?php

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;
use App\Models\Permission;
use Illuminate\Support\Facades\DB;
use App\Models\Menu;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::transaction(function () {
            DB::statement('SET FOREIGN_KEY_CHECKS=0;');

            Role::truncate();
            DB::statement('TRUNCATE TABLE `role_has_permissions`');
            Permission::truncate();

            foreach (Menu::all() as $menu){
                Permission::create(['guard_name'=>'admin', 'name' => 'add '.$menu->alias]);
                Permission::create(['guard_name'=>'admin', 'name' => 'edit '.$menu->alias]);
                Permission::create(['guard_name'=>'admin', 'name' => 'delete '.$menu->alias]);
                Permission::create(['guard_name'=>'admin', 'name' => 'list '.$menu->alias]);
                Permission::create(['guard_name'=>'admin', 'name' => 'show '.$menu->alias]);
            }

            DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        });

        $role = Role::create(['name' => User::SUPERADMIN,'active' => true]);
        $role->givePermissionTo(Permission::all());

        Role::create(['name' => 'Editor', 'active' => true]);
        $role->givePermissionTo(['add dashboard', 'edit dashboard', 'delete dashboard', 'list dashboard']);

    }
}
