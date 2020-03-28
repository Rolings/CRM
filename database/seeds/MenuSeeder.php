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
                'parent_id'=>0,
                'lang'=>'ru',
                'alias'=>'dashboard',
                'name'=>'Dashboard',
                'fa-icon'=>'icon-window',
                'image'=>'',
                'order'=>0
            ],
            [
                'parent_id'=>0,
                'lang'=>'ru',
                'alias'=>'category',
                'name'=>'Category',
                'fa-icon'=>'icon-window',
                'image'=>'',
                'order'=>0
            ],
            [
                'parent_id'=>0,
                'lang'=>'ru',
                'alias'=>'page',
                'name'=>'Page',
                'fa-icon'=>'icon-window',
                'image'=>'',
                'order'=>0
            ],
            [
                'parent_id'=>0,
                'lang'=>'ru',
                'alias'=>'product',
                'name'=>'Product',
                'fa-icon'=>'icon-window',
                'image'=>'',
                'order'=>0
            ],
            [
                'parent_id'=>0,
                'lang'=>'ru',
                'alias'=>'setting',
                'name'=>'Setting',
                'fa-icon'=>'icon-window',
                'image'=>'',
                'order'=>0,
                'child'=>[
                    [
                        'parent_id'=>0,
                        'lang'=>'ru',
                        'alias'=>'setting',
                        'name'=>'Setting',
                        'fa-icon'=>'icon-window',
                        'image'=>'',
                        'order'=>0
                    ],
                    [
                        'parent_id'=>0,
                        'lang'=>'ru',
                        'alias'=>'user',
                        'name'=>'Users',
                        'fa-icon'=>'entypo-user',
                        'image'=>'',
                        'order'=>0
                    ],
                ]
            ],
        ];

        foreach ($menus as $menu)
        {
            $childs = null;
            if(isset($menu['child'])){
                $childs = $menu['child'];
                unset($menu['child']);
            }

            $instance = $this->create($menu);
            if(!is_null($childs)){
                foreach ($childs as $child){
                    $instance = $this->create($child,$instance->id);
                }
            }
        }
    }

    protected function create($data, $parent_id = 0)
    {
        $data['parent_id'] = $parent_id;
        return Menu::create($data);
    }
}
