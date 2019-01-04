<?php

namespace App\Http\Controllers;

use App\Recipe;
use App\RecipeCommend;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RecipeCommendController extends Controller
{
    public function submitCommend($id, Request $req){
        $recipe = Recipe::where('RecipeId', $id)->first();
        $commend= new RecipeCommend();
        $commend->RecipeId = $recipe->RecipeId;
        $commend->UserId = Session::get('user')->UserId;
        $commend->UserCommend = $req->recipeDetailCommend;
        $commend->save();

        return redirect()->back();
    }

    public function deleteCommend($id, $cid){
        RecipeCommend::where('RecipeCommendId', $cid)->delete();
        return redirect()->back();
    }
}
