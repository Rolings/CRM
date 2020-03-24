<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;
    use App\Train\UUid;

    class Category extends Model
    {
        use UUid;

        public $incrementing = false;

        protected $keyType = 'string';

        protected $fillable=['alias','id'];

        public function parent()
        {
            return $this->hasMany(Category::class, 'id', 'parent_id');
        }

        public function children()
        {
            return $this->hasMany(Category::class, 'parent_id', 'id');
        }
    }
