<?php
/**
 * Created by PhpStorm.
 * User: Joseph Marcel
 * Date: 11/3/2018
 * Time: 9:10 PM
 */

class ingredientSeeder
{
    public function run(){
        \App\Ingredient::insert([
            'Ingredient_Name' => 'Chicken',
            'Label_Id' => '1'
        ]);
        \App\Ingredient::insert([
            'Ingredient_Name' => 'Beef',
            'Label_Id' => '1'
        ]);
        \App\Ingredient::insert([
            'Ingredient_Name' => 'Pork',
            'Label_Id' => '1'
        ]);
        \App\Ingredient::insert([
            'Ingredient_Name' => 'Lamb',
            'Label_Id' => '1'
        ]);
        \App\Ingredient::insert([
            'Ingredient_Name' => 'Chicken',
            'Label_Id' => '1'
        ]);
        \App\Ingredient::insert([
            'Ingredient_Name' => 'Chaisim',
            'Label_Id' => '2'
        ]);
        \App\Ingredient::insert([
            'Ingredient_Name' => 'Khailand',
            'Label_Id' => '2'
        ]);
        \App\Ingredient::insert([
            'Ingredient_Name' => 'Fumak',
            'Label_Id' => '2'
        ]);
        \App\Ingredient::insert([
            'Ingredient_Name' => 'BokChoy',
            'Label_Id' => '2'
        ]);
        \App\Ingredient::insert([
            'Ingredient_Name' => 'Udon',
            'Label_Id' => '3'
        ]);
        \App\Ingredient::insert([
            'Ingredient_Name' => 'Ramyun',
            'Label_Id' => '3'
        ]);
        \App\Ingredient::insert([
            'Ingredient_Name' => 'Apple',
            'Label_Id' => '4'
        ]);
        \App\Ingredient::insert([
            'Ingredient_Name' => 'Pineapple',
            'Label_Id' => '4'
        ]);
        \App\Ingredient::insert([
            'Ingredient_Name' => 'Watermelon',
            'Label_Id' => '4'
        ]);
        \App\Ingredient::insert([
            'Ingredient_Name' => 'Pear',
            'Label_Id' => '4'
        ]);
        \App\Ingredient::insert([
            'Ingredient_Name' => 'Soda',
            'Label_Id' => '5'
        ]);
        \App\Ingredient::insert([
            'Ingredient_Name' => 'Beer',
            'Label_Id' => '5'
        ]);
    }
}