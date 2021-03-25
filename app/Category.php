<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function bookmarks() {
        return $this->hasMany(Bookmark::class);
    }

    public static function takeRandomId(int $amount) {
        $id = Category::inRandomOrder()->take($amount)->get('id');
        return $id->isNotEmpty() ? $id[0] : NULL;
    }
}
