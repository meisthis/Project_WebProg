<?php

namespace App\Http\Controllers;

use App\Ingredient;
use App\Label;
use App\Recipe;
use App\RecipeSubscribe;
use App\Subscription;
use App\Tag;
use App\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class mainController extends Controller
{
    public function homeView(){
        $label = Label::All();
        $ingredient = Ingredient::all();
        $tag = Tag::all();
        return view('home', compact('label'), compact('ingredient'))->with(compact('tag'));
    }

    public function dashboard(){
        $user = Session::get('user');
        $recipe = Recipe::where('UserId', $user->UserId)->get();
        $viewerRecipe=0;
        if($recipe != null){
            foreach($recipe as $r){
                $viewerRecipe += $r->RecipeViewed;
            }
        }

        $like = RecipeSubscribe::whereNotIn('UserSubscribedId', [$user->UserId])->count();
        $subscribed = Subscription::where('UserSubscribedId', $user->UserId)->count();
        $totalRecipe = $recipe->count();
        return view('Session Login.dashboard_logged_in')->with(compact('viewerRecipe'))->with(compact('like'))
            ->with(compact('subscribed'))->with(compact('totalRecipe'));
    }
}