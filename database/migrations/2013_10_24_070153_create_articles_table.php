<?php

use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {

        Schema::create('articles', function ($table) {

            $table->increments('id');
            $table->string('title', 255);
            $table->text('content');
            $table->string('slug')->nullable();
            $table->integer('category_id');
            $table->text('summary')->nullable();
            $table->integer('author_id')->unsigned()->nullable();
            $table->foreign('author_id')->references('id')->on('users');
            $table->boolean('seen')->default(false);
            $table->string('meta_keywords')->nullable();
            $table->text('meta_description')->nullable();
            $table->boolean('is_published')->default(true);
            $table->string('path', 255)->nullable();
            $table->string('file_name', 255)->nullable();
            $table->integer('file_size')->nullable();
            $table->string('lang', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {

        Schema::drop('articles');
    }
}
