<?php

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{

    const LEVEL = [
        ''
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'root',
                'guard_name' => 1,
                'active' => 1
            ],
            [
                'name' => 'manager',
                'guard_name' => 1,
                'active' => 1
            ]
        ];

        foreach ($data as $role) {
            Role::create($role);
        }
    }
}
