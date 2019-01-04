<?php
/**
 * Created by PhpStorm.
 * User: Joseph Marcel
 * Date: 11/3/2018
 * Time: 8:52 PM
 */

class labelSeeder extends DatabaseSeeder
{
    public function run(){
        \App\Label::insert([
            'LabelName' => 'Meat'
        ]);
        \App\Label::insert([
            'LabelName' => 'Vegetable'
        ]);
        \App\Label::insert([
            'LabelName' => 'Noodle'
        ]);
        \App\Label::insert([
            'LabelName' => 'Fruit'
        ]);
        \App\Label::insert([
            'LabelName' => 'ETC'
        ]);
    }
}