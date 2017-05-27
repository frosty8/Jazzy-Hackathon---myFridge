<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RecipeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipe_table', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description')->nullable();
            $table->integer('element1')->nullable();
            $table->integer('element2')->nullable();
            $table->integer('element3')->nullable();
            $table->integer('element4')->nullable();
            $table->integer('element5')->nullable();
            $table->integer('element6')->nullable();
            $table->integer('element7')->nullable();
            $table->integer('element8')->nullable();
            $table->integer('element9')->nullable();
            $table->integer('element10')->nullable();
            $table->integer('element11')->nullable();
            $table->integer('element12')->nullable();
            $table->integer('element13')->nullable();
            $table->integer('element14')->nullable();
            $table->integer('element15')->nullable();
            $table->string('url');
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
        Schema::dropIfExists('recipe_table');
    }
}
