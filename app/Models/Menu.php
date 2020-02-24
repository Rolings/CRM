<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{

    protected $fillable=['alias','id'];

    public function parent()
    {
        return $this->hasMany(Menu::class, 'parent_id', 'id');
    }

    public function children()
    {
        return $this->hasMany(Menu::class, 'id', 'parent_id');
    }
}
