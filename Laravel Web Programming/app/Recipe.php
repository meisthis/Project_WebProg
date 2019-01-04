<?php

namespace App;

use http\Env\Request;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $table ='recipe';
    protected $primaryKey = 'RecipeId';

    public function recipeDetail(){
        return $this->hasMany(RecipeDetail::class, 'RecipeId', 'RecipeId');
    }

    public function user(){
        return $this->belongsTo(Users::class, 'UserId', 'UserId');
    }
}
