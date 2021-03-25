<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function bookmarks() {
        return $this->hasMany(Bookmark::class);
    }

    public static function takeRandomId() {
        $id = self::inRandomOrder()->take(1)->get('id');
        return $id->isNotEmpty() ? $id->first() : NULL;
    }
}
