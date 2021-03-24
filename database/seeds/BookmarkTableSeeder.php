<?php

use Illuminate\Database\Seeder;
use App\Bookmark;

class BookmarkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bookmark::factory()
                    ->count(config('global.seed'))
                    ->create();
    }
}
