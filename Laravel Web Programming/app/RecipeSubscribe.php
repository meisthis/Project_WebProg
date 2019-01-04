<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecipeSubscribe extends Model
{
    protected $table = "recipe_subscription";
    protected $primaryKey = "RecipeSubscriptionId";

    public function recipe(){
        return $this->belongsTo(Recipe::class, 'RecipeId', 'RecipeId');
    }

    public function user(){
        return $this->belongsTo(Users::class, 'UserSubscribedId', 'UserId');
    }
}
