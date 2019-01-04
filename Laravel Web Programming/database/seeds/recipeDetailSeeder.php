<?php

use Illuminate\Database\Seeder;

class recipeDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\RecipeDetail::insert([
            'RecipeId' => '1',
            'IngredientId' => '2'
        ]);
        \App\RecipeDetail::insert([
            'RecipeId' => '1',
            'IngredientId' => '10'
        ]);
        \App\RecipeDetail::insert([
            'RecipeId' => '1',
            'IngredientId' => '17'
        ]);

        \App\RecipeDetail::insert([
            'RecipeId' => '2',
            'IngredientId' => '22'
        ]);
        \App\RecipeDetail::insert([
            'RecipeId' => '2',
            'IngredientId' => '18'
        ]);
        \App\RecipeDetail::insert([
            'RecipeId' => '2',
            'IngredientId' => '21'
        ]);
        \App\RecipeDetail::insert([
            'RecipeId' => '2',
            'IngredientId' => '1'
        ]);
    }
}
