<?php
/**
 * Created by PhpStorm.
 * User: Joseph Marcel
 * Date: 11/3/2018
 * Time: 8:52 PM
 */

class labelSeeder
{
    public function run(){
        \App\Label::insert([
            'Label_Name' => 'Meat'
        ]);
        \App\Label::insert([
            'Label_Name' => 'Vegetable'
        ]);
        \App\Label::insert([
            'Label_Name' => 'Noodle'
        ]);
        \App\Label::insert([
            'Label_Name' => 'Fruit'
        ]);
        \App\Label::insert([
            'Label_Name' => 'ETC'
        ]);
    }
}