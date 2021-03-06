<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBookmarkForeignKeyForCategoryId extends Migration {

    public function up() {
        Schema::table('bookmarks', function (Blueprint $table) {
            $table->foreign('category_id')
                ->references('id')->on('categories')
                ->onDelete('set null');
        });
    }

    
    public function down() {
        Schema::table('bookmarks', function (Blueprint $table) {
            $table->dropForeign('bookmarks_category_id_foreign');
        });
    }
}
