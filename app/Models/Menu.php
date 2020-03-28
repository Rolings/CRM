<?php

namespace App\Models;

use App\Train\UUid;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use UUid;

    public function parent()
    {
        return $this->hasMany(Menu::class, 'id', 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Menu::class, 'parent_id', 'id');
    }

    public function scopeIsActive($query)
    {
        return $query->whereIsActive(true);
    }

}
