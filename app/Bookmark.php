<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Bookmark extends Model {
    

    protected $fillable = ['link_title', 'url', 'category_id', 'date_last_accessed'];


    public function category() {
        return $this->belongsTo(Category::class);
    }


    public function path() {
        return route('bookmarks.show', $this);
    }


    public static function newest() {
        return self::latest()->paginate(config('global.paginate'));
    }

    public function lastAccessed() {
        $this->update(['date_last_accessed' => Carbon::now()]);
    }
}
