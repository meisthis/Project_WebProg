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

        Schema::create('recipe', function (Blueprint $table) {
            $table->increments('RecipeId')->unique();
            $table->string('RecipeName');
            $table->string('RecipeDescription');
            $table->double('RecipeRating')->default(0.0);
            $table->integer('UserId');//->references('User_Id')->on('Users');
            $table->string('RecipeImageName');
            $table->string('RecipeHyperlink')->nullable();
            $table->integer('RecipeViewed')->default(0);
            $table->text('RecipeInstruction');
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
        Schema::dropIfExists('recipe');
    }
}
