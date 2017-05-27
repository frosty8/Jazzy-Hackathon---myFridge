<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FridgeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fridge', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('element1');
            $table->integer('element2');
            $table->integer('element3');
            $table->integer('element4');
            $table->integer('element5');
            $table->integer('element6');
            $table->integer('element7');
            $table->integer('element8');
            $table->integer('element9');
            $table->integer('element10');
            $table->integer('element11');
            $table->integer('element12');
            $table->integer('element13');
            $table->integer('element14');
            $table->integer('element15');
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
        Schema::dropIfExists('fridge');
    }
}
