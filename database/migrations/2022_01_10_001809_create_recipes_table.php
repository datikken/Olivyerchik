<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->string('heading')->nullable();
            $table->string('subheading')->nullable();
            $table->text('recipe-intro')->nullable();
            $table->text('recipe-detail')->nullable();
            $table->json('recipe-nutrition')->nullable();
            $table->longText('recipe-steps')->nullable();
            $table->longText('ingred-list')->nullable();
            $table->unsignedBigInteger('image_id')->nullable();
            $table->unsignedBigInteger('video_id')->nullable();
            $table->timestamps();

            $table->foreign('image_id')->references('id')->on('images');
            $table->foreign('video_id')->references('id')->on('videos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recipes');
    }
}
