<?php

namespace App\Models;

use App\Train\UUid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Menu extends Model
{
    use UUid;

    public $incrementing = false;
    protected $fillable = ['id', 'parent_id', 'lang', 'active', 'alias', 'name', 'model', 'fa-icon', 'image', 'is_active', 'order'];

    public function parent()
    {
        return $this->hasOne(Menu::class, 'id', 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Menu::class, 'parent_id', 'id');
    }

    public function setAliasAttribute($value)
    {
        $this->attributes['alias'] = Str::slug($value);
    }

    public function scopeIsActive($query)
    {
        return $query->where('is_active',true);
    }

}
