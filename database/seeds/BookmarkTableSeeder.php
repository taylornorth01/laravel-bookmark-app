<?php

use Illuminate\Database\Seeder;
use App\Bookmark;

class BookmarkTableSeeder extends Seeder {
    
    public function run() {
        factory(Bookmark::class, config('global.seed'))
            ->create();
    }
}
