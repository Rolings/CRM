<?php

namespace App\Models;

use App\Train\UUid;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use Uuid;

    protected $keyType = 'string';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'route',
        'guard_name',
        'description',
    ];

    public $timestamps = false;

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }


}
