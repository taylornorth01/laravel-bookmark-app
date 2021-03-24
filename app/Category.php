<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function bookmarks() {
        return $this->hasMany(Bookmark::class);
    }
}
