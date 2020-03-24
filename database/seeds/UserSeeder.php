<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                "role_id" => 1,
                "first_name" => "Admin",
                "last_name" => "Admin",
                "email" => "admin@admin.com",
                "password" => Hash::make('secret'),
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
