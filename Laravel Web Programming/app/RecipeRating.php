<?php

namespace App;

use http\Env\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class RecipeRating extends Model
{
    protected $table = "recipe_rating";
    protected $primaryKey = "RecipeRatingId";
}
