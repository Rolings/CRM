<?php

use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menus = [
            [

                "name" => "Dashboard",
                "parent_id" => 0,
                "fa-icon" => null
            ],
            [
                "name" => "Setting",
                "parent_id" => 0,
                "fa-icon" => null
            ],
            [
                "name" => "Menu",
                "parent_id" => 2,
                "fa-icon" => null
            ],
            [
                "name" => "Users",
                "parent_id" => 2,
                "fa-icon" => null
            ],
        ];

        foreach ($menus as $menu) {
            Menu::create($menu);
        }
    }
}
