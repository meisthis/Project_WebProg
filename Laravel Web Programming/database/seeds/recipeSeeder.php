<?php
/**
 * Created by PhpStorm.
 * User: Joseph Marcel
 * Date: 11/3/2018
 * Time: 9:01 PM
 */

class recipeSeeder
{
    public function run(){
        \App\Recipe::insert([
            'Recipe_Name' => 'Opor Ayam',
            'Recipe_Description' => 'Simplest Opor Ayam',
            'Recipe_Rating' => '0',
            'Ingredient_Id' => '1',
            'User_Id' => '1'
        ]);
    }
}