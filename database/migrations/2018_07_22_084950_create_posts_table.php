<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('posts', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('category_id');
        $table->unsignedBigInteger('photo_id');
        $table->string('locale');
        $table->string('title');
        $table->string('slug')->unique();
        $table->text('body');
        $table->text('meta_title');
        $table->text('meta_description');
        $table->timestamps();

        $table->unsignedBigInteger('language_id')->nullable();
        $table->foreign('language_id')->references('id')->on('languages')->onDelete('cascade');
    });
}



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('posts');
    }
}
