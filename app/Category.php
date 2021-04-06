<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {


    protected $fillable = [
        'category_name', 'slug'
    ];


    public function getRouteKeyName() {
        return 'slug';
    }


    public function bookmarks() {
        return $this->hasMany(Bookmark::class);
    }


    public static function takeRandomId() {
        $id = self::inRandomOrder()->take(1)->get('id');
        return $id->first() ?? NULL;
    }


    public function bookmarksPaginate() {
        return $this->bookmarks->paginate(config('global.paginate'));
    }


    public static function newest() {
        return self::latest()->paginate(config('global.paginate'));
    }
}
