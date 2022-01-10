<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImageblesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imagebles', function (Blueprint $table) {
            $table->id();

            $table->foreignId('image_id')
                ->constrained('images');
            $table->string('imageble_type')->nullable();

            $table->foreignId('recipe_id')
                ->nullable()
                ->constrained('recipes');

            $table->foreignId('post_id')
                ->nullable()
                ->constrained('posts');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('imagebles');
    }
}
