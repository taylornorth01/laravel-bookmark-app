<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeeder extends Seeder {

    public function run() {
        factory(Category::Class, ceil(config('global.seed') / 10))
            ->create();
    }
}
