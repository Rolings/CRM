<?php

namespace App\Models;

use App\Train\UUid;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class User extends Authenticatable
{
    use Notifiable,UUid,AuthenticableTrait;

    protected $keyType = 'string';
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'first_name',
        'last_name',
        'email',
        'phone',
        'image',
        'is_admin',
        'is_active',
        'last_access',
        'remember_token',
        'last_access',
        'created_at',
        'updated_at',
    ];

    protected $hidden = [
        'password',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function setPhoneAttribute($value)
    {
        return $this->attributes['phone'] = preg_replace('![^\d]+!u', '', $value);
    }

    public function setEmailAttribute($value)
    {
        return $this->attributes['email'] = trim($value);
    }

    public function scopeOnlyActive($query)
    {
        return $query->whereActive(true);
    }


}
