<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bookmark extends Model {
    
    protected $fillable = ['link_title', 'url'];

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
