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
            $table->double('Recipe_Rating');
            $table->integer('Ingredient_Id');//->references('Ingredient_Id')->on('Ingredients');
            $table->integer('User_id');//->references('User_Id')->on('Users');
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
