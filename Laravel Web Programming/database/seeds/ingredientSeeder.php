<?php
/**
 * Created by PhpStorm.
 * User: Joseph Marcel
 * Date: 11/3/2018
 * Time: 9:10 PM
 */

class ingredientSeeder extends DatabaseSeeder
{
    public function run(){
        \App\Ingredient::insert([
            'IngredientName' => 'Chicken',
            'LabelId' => '1'
        ]);
        \App\Ingredient::insert([
            'IngredientName' => 'Beef',
            'LabelId' => '1'
        ]);
        \App\Ingredient::insert([
            'IngredientName' => 'Pork',
            'LabelId' => '1'
        ]);
        \App\Ingredient::insert([
            'IngredientName' => 'Lamb',
            'LabelId' => '1'
        ]);
        \App\Ingredient::insert([
            'IngredientName' => 'Chaisim',
            'LabelId' => '2'
        ]);
        \App\Ingredient::insert([
            'IngredientName' => 'Khailand',
            'LabelId' => '2'
        ]);
        \App\Ingredient::insert([
            'IngredientName' => 'Fumak',
            'LabelId' => '2'
        ]);
        \App\Ingredient::insert([
            'IngredientName' => 'BokChoy',
            'LabelId' => '2'
        ]);
        \App\Ingredient::insert([
            'IngredientName' => 'Udon',
            'LabelId' => '3'
        ]);
        \App\Ingredient::insert([
            'IngredientName' => 'Ramyun',
            'LabelId' => '3'
        ]);
        \App\Ingredient::insert([
            'IngredientName' => 'Apple',
            'LabelId' => '4'
        ]);
        \App\Ingredient::insert([
            'IngredientName' => 'Pineapple',
            'LabelId' => '4'
        ]);
        \App\Ingredient::insert([
            'IngredientName' => 'Watermelon',
            'LabelId' => '4'
        ]);
        \App\Ingredient::insert([
            'IngredientName' => 'Pear',
            'LabelId' => '4'
        ]);
        \App\Ingredient::insert([
            'IngredientName' => 'Soda',
            'LabelId' => '5'
        ]);
        \App\Ingredient::insert([
            'IngredientName' => 'Beer',
            'LabelId' => '5'
        ]);
        \App\Ingredient::insert([
            'IngredientName' => 'Garlic',
            'LabelId' => '5'
        ]);
        \App\Ingredient::insert([
            'IngredientName' => 'Shallot',
            'LabelId' => '5'
        ]);
        \App\Ingredient::insert([
            'IngredientName' => 'Chilli',
            'LabelId' => '5'
        ]);
        \App\Ingredient::insert([
            'IngredientName' => 'Tomato',
            'LabelId' => '5'
        ]);
        \App\Ingredient::insert([
            'IngredientName' => 'Rice',
            'LabelId' => '5'
        ]);
        \App\Ingredient::insert([
            'IngredientName' => 'Mushroom',
            'LabelId' => '5'
        ]);
    }
}