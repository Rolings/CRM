<?php

    namespace App\Train;

    use Illuminate\Support\Str;
    use Illuminate\Database\Eloquent\Model;

    trait UUid
    {

        protected static function boot()
        {
            parent::boot();
            static::creating(function ($model) {
                if (empty($model->getKey())) {
                    $model->{$model->getKeyName()} = (string)Str::uuid();
                }
            });
        }
    }