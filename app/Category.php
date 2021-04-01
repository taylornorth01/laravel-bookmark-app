<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {


    protected $fillable = ['category_name'];


    public function bookmarks() {
        return $this->hasMany(Bookmark::class);
    }


    public static function takeRandomId() {
        $id = self::inRandomOrder()->take(1)->get('id');
        return $id->isNotEmpty() ? $id->first() : NULL;
    }


    public function bookmarkPage(?int $page) {
        return $this->bookmarks->forPage($page, config('paginate_amount'));
    }

    
    public static function newest() {
        return self::latest()->paginate(config('paginate_amount'));
    }
}
