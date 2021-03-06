<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookmarksTable extends Migration {

    public function up() {
        Schema::create('bookmarks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('category_id')->nullable();
            $table->string('link_title', 100);
            $table->string('slug');
            $table->text('url');
            $table->timestamp('publication_date')->useCurrent();
            $table->timestamp('date_last_accessed')->useCurrent();
            $table->timestamps();
        });
    }

    
    public function down() {
        Schema::dropIfExists('bookmarks');
    }
}
