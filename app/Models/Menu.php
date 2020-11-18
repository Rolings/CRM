<?php

namespace App\Models;

use App\Train\UUid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Menu extends Model
{
    use UUid;

    public $incrementing = false;
    protected $fillable = ['id', 'parent_id', 'lang', 'active', 'alias', 'name', 'model', 'fa-icon','route','view', 'image', 'is_active', 'order'];

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

    public function getAlias()
    {
        return (!empty($this->route) && !is_null($this->route)) ? route($this->route) : route('admin.' . $this->alias . '.index');
    }

}
