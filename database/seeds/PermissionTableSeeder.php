<?php

use Illuminate\Database\Seeder;
use App\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                "role_id" => 1,
                "route" => "/",
                "status" => true
            ],
        ];

        foreach ($roles as $role) {
            Permission::create($role);
        }
    }
}
