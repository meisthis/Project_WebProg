<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ResepDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    
        Schema::create('ResepDetail', function (Blueprint $table) {
            $table->increments('Detail_id')->unique();
            $table->integer('Recipe_id')->unsigned();//nyamain tipe data soalnya recipe id itu defaultnya unsigned
            $table->foreign('Recipe_id')->references('Recipe_id')->on('recipes')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('Ingredient_id')->unsigned();
            $table->foreign('Ingredient_id')->references('Ingredient_id')->on('ingredients')->onDelete('cascade')->onUpdate('cascade');

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
        //
    }
}
