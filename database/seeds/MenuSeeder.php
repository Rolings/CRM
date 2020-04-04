<?php

use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menus=[
            [
                'parent_id'=>null,
                'lang'=>'ru',
                'alias'=>'dashboard',
                'name'=>'Dashboard',
                'fa-icon'=>'icon-window',
                'image'=>'',
                'order'=>0,
                'is_active'=>1,
            ],
            [
                'parent_id'=>null,
                'lang'=>'ru',
                'alias'=>'products',
                'name'=>'Product',
                'fa-icon'=>'icon-window',
                'image'=>'',
                'is_active'=>1,
                'order'=>3
            ],
            [
                'parent_id'=>null,
                'lang'=>'ru',
                'alias'=>'settings',
                'name'=>'Settings',
                'fa-icon'=>'icon-window',
                'image'=>'',
                'is_active'=>1,
                'order'=>4,
                'child'=>[
                    [
                        'parent_id'=>null,
                        'lang'=>'ru',
                        'alias'=>'setting',
                        'name'=>'Setting',
                        'fa-icon'=>'icon-window',
                        'image'=>'',
                        'is_active'=>1,
                        'order'=>5,
                    ],
                    [
                        'parent_id'=>null,
                        'lang'=>'ru',
                        'alias'=>'users',
                        'name'=>'Users',
                        'fa-icon'=>'entypo-user',
                        'image'=>'',
                        'is_active'=>1,
                        'order'=>6
                    ],
                ]
            ],
        ];
        $this->each($menus);
    }

    public function each($list, $index = 0, $parent_id = null)
    {
        foreach ($list as $index => $value) {
            $children = null;
            if (isset($value['child'])) {
                $children = $value['child'];
                unset($value['child']);
                $instance = $this->create($value);
                $this->each($children, $index, $instance->id);
            }else{
                $this->create($value, $index, $parent_id);
            }
        }
    }

    protected function create($data, $index = 0, $parent_id = null)
    {
        $data['parent_id'] = $parent_id;
        $data['order'] = $data['order']??$index;
        return Menu::create($data);
    }
}
