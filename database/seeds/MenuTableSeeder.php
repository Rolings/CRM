<?php

use Illuminate\Database\Seeder;
use App\Models\Menu;
use Illuminate\Support\Str;

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
                "alias" => Str::slug('Dashboard'),
                "parent_id" => 0,
                "fa-icon" => null
            ],
            [
                "name" => "Setting",
                "alias" => Str::slug('Setting'),
                "parent_id" => 0,
                "fa-icon" => null
            ],
            [
                "name" => "Menu",
                "alias" => Str::slug('Menu'),
                "parent_id" => 2,
                "fa-icon" => null
            ],
            [
                "name" => "Users",
                "alias" => Str::slug('Users'),
                "parent_id" => 3,
                "fa-icon" => null
            ],
            [
                "name" => "Clients",
                "alias" => Str::slug('Clients'),
                "parent_id" => 4,
                "fa-icon" => null
            ],
            [
                "name" => "Women",
                "alias" => Str::slug('Women'),
                "parent_id" => 4,
                "fa-icon" => null
            ],
            [
                "name" => "Man",
                "alias" => Str::slug('Man'),
                "parent_id" => 4,
                "fa-icon" => null
            ],
            [
                "name" => "Child",
                "alias" => Str::slug('Child'),
                "parent_id" => 4,
                "fa-icon" => null
            ],
            [
                "name" => "Frontend",
                "alias" => Str::slug('Frontend'),
                "parent_id" => 2,
                "fa-icon" => null
            ],
            [
                "name" => "Backend",
                "alias" => Str::slug('Backend'),
                "parent_id" => 2,
                "fa-icon" => null
            ],
        ];

        foreach ($menus as $menu) {
            Menu::create($menu);
        }
    }
}
