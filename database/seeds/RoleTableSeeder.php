<?php

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleTableSeeder extends Seeder
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
                "id" => 0,
                "group_id" => 0,
                "name" => "Admin",
                "fa-icon" => null
            ],
        ];

        foreach ($roles as $role) {
            Role::create($role);
        }
    }
}
