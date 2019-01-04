<?php

namespace App\Http\Controllers;

use App\RecipeSubscribe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RecipeSubscribeController extends Controller
{
    public function recipeLiked($id){
        $recipe = RecipeSubscribe::where('RecipeId', $id)->where('UserSubscribedId', Session::get('user')->UserId)->get();

        if($recipe == null || $recipe->count() == 0){
            $subRecipe = new RecipeSubscribe();
            $subRecipe->RecipeId = $id;
            $subRecipe->UserSubscribedId = Session::get('user')->UserId;
            $subRecipe->save();
        }else{
            RecipeSubscribe::where('RecipeId', $id)->where('UserSubscribedId', Session::get('user')->UserId)->delete();
        }
        return redirect('/dashboard/recipe/searchRecipe');
    }
}
