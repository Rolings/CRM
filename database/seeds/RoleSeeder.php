<?php

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => Role::ROOT,
                'guard_name' => 1,
                'active' => 1
            ],
            [
                'name' => Role::MANAGER,
                'guard_name' => 1,
                'active' => 1
            ]
        ];

        foreach ($data as $role) {
            Role::create($role);
        }
    }
}
