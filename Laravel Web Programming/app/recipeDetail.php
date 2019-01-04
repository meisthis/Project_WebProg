<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecipeDetail extends Model
{
    protected $table ='recipe_detail';
    protected $primaryKey = 'RecipeDetailId';
    public $timestamps=false;

    public function recipe(){
        return $this->belongsTo(Recipe::class, 'RecipeId', 'RecipeId');
    }

    public function ingredient(){
        return $this->belongsTo(Ingredient::class, 'IngredientId', 'IngredientId');
    }
}
