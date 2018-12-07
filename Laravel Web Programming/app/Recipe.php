<?php

namespace App;

use http\Env\Request;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $table ='recipes';
    public $timestamps =false;

    public function ingredient(){
        return $this->belongsTo(Ingredient::class, 'Ingredient_Id');
    }

    public function user(){
        return $this->belongsTo(Users::class, 'User_Id');
    }
}
