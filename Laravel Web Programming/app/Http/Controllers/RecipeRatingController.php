<?php

namespace App\Http\Controllers;

use App\Recipe;
use App\RecipeRating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RecipeRatingController extends Controller
{
    public function rateRecipe($id, Request $req){
        $checkUser = RecipeRating::where('UserId', Session::get('user')->UserId)->first();
        $recipe = Recipe::where('RecipeId', $id)->first();
        $rate=0;

        if($checkUser == null){
            $rating = new RecipeRating();
            $rating->RecipeId = $id;
            $rating->UserId = Session::get('user')->UserId;
            $rating->RecipeRating = $req->recipeDetailRating;
            $rating->save();
        }else{
            $checkUser->RecipeRating = $req->recipeDetailRating;
            $checkUser->save();
        }

        foreach (RecipeRating::where('RecipeId', $id)->get() as $rr){
            $rate+=$rr->RecipeRating;
        }
        $rate/= RecipeRating::where('RecipeId', $id)->count();
        $recipe->RecipeRating = $rate;
        $recipe->save();

        return redirect()->back();
    }
}
