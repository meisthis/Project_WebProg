<?php
/**
 * Created by PhpStorm.
 * User: Joseph Marcel
 * Date: 11/3/2018
 * Time: 8:54 PM
 */

class userSeeder extends DatabaseSeeder
{
    public function run(){
        \App\Users::insert([
            'UserName' => 'admin',
            'UserPassword' => \Illuminate\Support\Facades\Hash::make('admin'),
            'UserAddress' => 'Jalan admin',
            'UserEmail' => 'admin@cookit.com',
            'UserPhone' => '0811326457'
        ]);
        \App\Users::insert([
            'UserName' => 'Marcel',
            'UserPassword' => \Illuminate\Support\Facades\Hash::make('marcel'),
            'UserAddress' => 'Jalan ancol',
            'UserEmail' => 'marc@gmail.com',
            'UserPhone' => '0817388457'
        ]);
    }
}