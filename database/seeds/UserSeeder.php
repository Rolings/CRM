<?php

use Illuminate\Database\Seeder;
use App\Models\{User,Role};
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
        $admin->role_id         = Role::whereName('root')->first()->id;
        $admin->first_name      = 'Дмитрий';
        $admin->last_name       = 'Шрамко';
        $admin->phone           = '123456';
        $admin->password        = Hash::make('secret');
        $admin->email           = 'admin@admin.com';
        $admin->active          = true;
        $admin->notification    = true;
        $admin->save();

        $admin                  = new User();
        $admin->role_id         = Role::whereName('manager')->first()->id;
        $admin->first_name      = 'Robert';
        $admin->last_name       = 'Manager';
        $admin->phone           = '1233321';
        $admin->password        = Hash::make('secret');
        $admin->email           = 'client@client.com';
        $admin->active          = true;
        $admin->notification    = true;
        $admin->save();


    }
}
