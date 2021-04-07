<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder {

    public function run() {
        factory(Category::Class, floor(config('global.seed') / 10))
            ->create();
    }
}
