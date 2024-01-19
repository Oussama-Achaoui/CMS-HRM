<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('project_category_id');
            $table->unsignedBigInteger('photo_id');
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('body');
            $table->text('image_featured2')->nullable();
            $table->text('img_gal1')->nullable();
            $table->text('img_gal2')->nullable();
            $table->text('img_gal3')->nullable();
            $table->text('img_gal4')->nullable();
            $table->text('date')->nullable();
            $table->text('client')->nullable();
            $table->text('button_text')->nullable();
            $table->text('button_link')->nullable();
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
        Schema::dropIfExists('projects');
    }
}
