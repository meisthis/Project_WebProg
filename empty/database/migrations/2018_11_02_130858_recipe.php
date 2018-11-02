<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Recipe extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('Recipes', function (Blueprint $table) {
            $table->increments('Recipe_id')->unique();
            $table->string('Recipe_Name');
            $table->string('Recipe_Desc');
            $table->string('Recipe_Rating');
//            $table->foreign('Ingredient_Id')->on('Ingredients');
//            $table->foreign('User_id')->on('Users');
//            $table->rememberToken();
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
