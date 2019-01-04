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
        Schema::create('recipe_detail', function (Blueprint $table) {
            $table->increments('RecipeDetailId')->unique();
            $table->integer('RecipeId')->unsigned();//nyamain tipe data soalnya recipe id itu defaultnya unsigned
//            $table->foreign('RecipeId')->references('RecipeId')->on('recipe')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('IngredientId')->unsigned();
//            $table->foreign('IngredientId')->references('IngredientId')->on('ingredient')->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('recipe_detail');
    }
}
