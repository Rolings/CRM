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

    const PATCH = 'users/';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'role_id',
        'first_name',
        'last_name',
        'middle_name',
        'email',
        'phone',
        'avatar',
        'password',
        'active',
        'notification',
        'email_verified_at',
        'last_access',
        'remember_token',
        'created_at',
        'updated_at',
    ];

    protected $hidden = [
        'password',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'active'            => 'boolean',
        'notification'      => 'boolean',
    ];


    public $with = ['role'];

    public function role()
    {
        return $this->hasOne(Role::class,'id','role_id');
    }

    public function getPublicAvatarAttribute()
    {
        return !empty($this->attributes['avatar']) ? asset('storage/'.self::PATCH . $this->attributes['avatar'])  : 'http://placehold.it/150';
    }

    public function getAvatarOriginalAttribute()
    {
        return !empty($this->attributes['avatar']) ? explode('/', $this->attributes['avatar'])[1] : '';
    }

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
