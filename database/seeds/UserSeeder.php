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

        $admin                  = new User();
        $admin->first_name      = 'Дмитрий';
        $admin->last_name       = 'Шрамко';
        $admin->phone           = '123456';
        $admin->password        = Hash::make('secret');
        $admin->email           = 'admin@admin.com';
        $admin->is_admin        = true;
        $admin->active          = true;
        $admin->notification    = true;
        $admin->save();

        $admin->assignRole(User::SUPERADMIN);
    }
}
