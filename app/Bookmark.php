<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bookmark extends Model {
    

    protected $fillable = ['link_title', 'url', 'category_id'];


    public function category() {
        return $this->belongsTo(Category::class);
    }


    public function path() {
        return route('bookmarks.show', $this);
    }


    public static function newest() {
        return self::latest()->paginate(config('global.paginate'));
    }
}
