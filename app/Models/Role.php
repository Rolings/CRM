<?php

namespace App\Models;

use App\Train\UUid;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use Uuid;

    protected $keyType = 'string';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'name',
        'guard_name',
        'active',
    ];

    public $timestamps = false;

}
