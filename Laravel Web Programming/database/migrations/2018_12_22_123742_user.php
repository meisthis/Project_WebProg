<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class User extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
          Schema::create('Users', function (Blueprint $table) {
            $table->increments('User_Id')->unique();
            $table->string('User_Name');
            $table->string('User_Password');
            $table->string('User_Address');
            $table->string('User_Email');
            $table->string('User_phone');
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
