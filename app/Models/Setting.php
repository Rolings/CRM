<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Train\UUid;

class Setting extends Model
{
    use UUid;

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable=['key','value'];

}
