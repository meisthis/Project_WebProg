<?php
/**
 * Created by PhpStorm.
 * User: Joseph Marcel
 * Date: 11/3/2018
 * Time: 8:54 PM
 */

class userSeeder
{
    public function run(){
        \App\User::insert([
            'User_Name' => 'admin',
            'User_Password' => 'admin',
            'User_address' => 'admin',
            'User_Email' => 'admin@cookit.com',
            'User_phone' => '0811326457'
        ]);
    }
}