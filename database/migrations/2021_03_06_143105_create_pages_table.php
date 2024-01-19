<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('photo_id')->nullable();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('body');
            $table->text('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            
            $table->timestamps();

            $table->unsignedBigInteger('language_id')->nullable();
            $table->foreign('language_id')->references('id')->on('languages')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pages');
    }
}
