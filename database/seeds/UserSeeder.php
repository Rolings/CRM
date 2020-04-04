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

        $admin             = new User();
        $admin->name       = 'Дмитрий';
        $admin->name       = 'Дмитрий';
        $admin->notification = true;
        $admin->phone      = '123456';
        $admin->password   = bcrypt('meganote');
        $admin->email      = 'sancho@artjoker.ua';
        $admin->active     = true;
        $admin->save();



        $users = [
            [
                "role_id" => 1,
                "first_name" => "Дмитрий",
                "last_name" => "Шрамко",
                "email" => "admin@admin.com",
                'is_active'=>true,
                "password" => Hash::make('secret'),
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
