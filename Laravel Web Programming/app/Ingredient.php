<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    protected $table = 'ingredient';
    protected $primaryKey = 'IngredientId';
    public $timestamps = false;

    public function label(){
        return $this->belongsTo(Label::class, 'LabelId', 'LabelId');
    }

    public function recipeDetail(){
        return $this->hasMany(RecipeDetail::class, 'IngredientId', 'IngredientId');
    }

    public function tag(){
        return $this->hasOne(Tag::class, 'IngredientId', 'IngredientId');
    }
}
