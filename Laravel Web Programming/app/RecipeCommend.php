<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecipeCommend extends Model
{
    protected $primaryKey = "RecipeCommendId";
    protected $table = "recipe_commend";
    public $timestamps = true;

    public function user(){
        return $this->belongsTo(Users::class, 'UserId', 'UserId');
    }

    public function recipe(){
        return $this->belongsTo(Recipe::class, 'RecipeId', 'RecipeId');
    }
}
