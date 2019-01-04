<?php

namespace App\Http\Controllers;

use App\Ingredient;
use App\RecipeCommend;
use App\RecipeSubscribe;
use App\Subscription;
use App\Tag;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Recipe;
use App\recipeDetail;
use Illuminate\Support\Facades\Session;

class RecipeController extends Controller
{
    public function showall(){
        $recip = Recipe::where('RecipeId', '>', 0)->paginate(3);
        return view('recipe',compact('recip'));
    }

    public function searchRecipe(){
        $recip = Recipe::where('RecipeId' , '>', 0)->paginate(3);
        $like = RecipeSubscribe::where('UserSubscribedId', Session::get('user')->UserId)->get();
        return view('Session Login.dashboard_search_recipe',compact('recip'), compact('like'));
    }

    public function processIngredient(Request $req){
        $temp = [];
        $tag = Tag::all();

        foreach($tag as $t) {
            array_push($temp, $t->IngredientId);
            Tag::where('IngredientId', $t->IngredientId)->delete();
        }

        $recipes = recipeDetail::all();
        $recipes = $recipes->whereIn('IngredientId', $temp);

        $temprd = [];
        foreach($recipes as $r) {
            array_push($temprd, $r->RecipeId);
        }

        $recipes = Recipe::whereIn('RecipeId', $temprd)->distinct()->paginate(3);
        return view('recipe', compact('recipes'));
    }

    public function searchByName(Request $req){
        $value = $req->get('searchInput');
        $recip = Recipe::where('RecipeName', 'LIKE', '%'.$value.'%')->paginate(3);
        return view('recipe', compact('recip'));
    }

    public function searchRecipeByName(Request $req){
        $value = $req->get('searchInput');
        $recip = Recipe::where('RecipeName', 'LIKE', '%'.$value.'%')->paginate(3);
        return view('Session Login.dashboard_search_recipe', compact('recip'));
    }

    public function detailRecipe($id){
        $recipe = Recipe::where('RecipeId', $id)->first();
        $detail = RecipeDetail::where('RecipeId', $id)->get();
        if(Session::get('login')){
            $commend = RecipeCommend::where('RecipeId', $id)->get();
        }
        if($recipe){
            $recipe->RecipeViewed+=1;
            $recipe->save();
            return view('recipe_detail', compact('recipe'), compact('detail'))->with(compact('commend'));
        }else{
            return redirect()->back()->with('alert', 'Recipe Not Found');
        }
    }

    public function viewOwnRecipe(){
        $recipe = Recipe::where('UserId', Session::get('user')->UserId)->paginate(3);
        return view('Session Login.dashboard_recipe', compact('recipe'));
    }

    public function insertNewRecipe(Request $req){
        $validator = \Illuminate\Support\Facades\Validator::make($req->all(), [
            "insertRecipeName" => "required",
            "insertRecipeDescription" => "required",
            "insertRecipeImage" => "required|image",
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }else {
            $image = $req->insertRecipeImage;
            $image->move('img', $image->getClientOriginalName());

            $recipe = new Recipe();
            $recipe->RecipeName = $req->insertRecipeName;
            $recipe->RecipeDescription = $req->insertRecipeDescription;
            $recipe->RecipeImageName = $req->insertRecipeImage->getClientOriginalName();
            $recipe->RecipeHyperlink = $req->insertRecipeHyperlink;
            $recipe->RecipeRating = 0;
//            dd($req);
            $recipe->RecipeInstruction = $req->insertRecipeInstruction;
            $recipe->UserId = Session::get('user')->UserId;
            $recipe->save();

            for( $i = 0; $i <= Ingredient::all()->count() ; $i++) {
                if(isset($req[$i])){
                    $recipeDetail = new RecipeDetail();
                    $recipeDetail->RecipeId = $recipe->RecipeId;
                    $recipeDetail->IngredientId = $i;
                    $recipeDetail->save();
                }
            }

            $sub = Subscription::where('UserSubscribedId', Session::get('user')->UserId)->get();
            if($sub != null){
                foreach($sub as $s){
                    $s->LastLoggedIn = Carbon::now();
                    $s->save();
                }
            }

            return redirect('/dashboard/recipe');
        }
    }

    public function deleteRecipe($id){
        Recipe::where('RecipeId', $id)->delete();

        return redirect('/dashboard/recipe');
    }

    public function updateRecipe($id){
//        $recipe = Recipe::where('RecipeId', $id)->first();
        $recipeDetail = RecipeDetail::where('RecipeId', $id)->get();
        $ingredient = Ingredient::all();
//        $temp = [];
//        foreach($recipeDetail as $r){
//            array_push($temp, $r->IngredientId);
//        }
//
//        $result=[];
//        foreach($ingredient as $i){
//            if(isset($temp[$i->IngredientId])){
//                array_push($result, isset($temp[$i->IngredientId]));
//            }
//        }
//
//        dd($temp);

        return view('Session Login.dashboard_update_recipe', compact('ingredient'), compact('recipeDetail'));
    }

    public function updateRecipeAttempt($id, Request $req){
        $validator = Validator::make($req->all(), [
            "updateRecipeName" => "required",
            "updateRecipeDescription" => "required",
            "updateRecipeImage" => "required|image",
            "updateRecipeInstruction"=>"required"
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }else {
            $size=0;
            $temp = [];
            for( $i = 0; $i <= Ingredient::all()->count(); $i++) {
                if(isset($req[$i])){
                    array_push($temp,$i);
                    $size++;
                }
            }

            if($size > 0){
                $image = $req->updateRecipeImage;
                $image->move('img', $image->getClientOriginalName());

                $recipe = Recipe::where('RecipeId', $id)->first();
                $recipe->RecipeName = $req->updateRecipeName;
                $recipe->RecipeDescription = $req->updateRecipeDescription;
                $recipe->RecipeImageName = $req->updateRecipeImage->getClientOriginalName();
                $recipe->RecipeHyperlink = $req->updateRecipeHyperlink;
                $recipe->RecipeInstruction = $req->updateRecipeInstruction;
                $recipe->save();

                RecipeDetail::where('RecipeId', $id)->delete();

                for( $i = 0; $i <= Ingredient::all()->count() ; $i++) {
                    if(isset($req[$i])){
                        $recipeDetail = new RecipeDetail();
                        $recipeDetail->RecipeId = $recipe->RecipeId;
                        $recipeDetail->IngredientId = $i;
                        $recipeDetail->save();
                    }
                }

                $sub = Subscription::where('UserSubscribedId', Session::get('user')->UserId)->get();
                if($sub != null){
                    foreach($sub as $s){
                        $s->LastLoggedIn = Carbon::now();
                        $s->save();
                    }
                }

                return redirect('/dashboard/recipe');
            }else{
                return redirect()->back()->withErrors("You have to Choose Ingredient");
            }
        }
    }
}
