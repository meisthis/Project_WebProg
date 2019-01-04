<?php

namespace App\Http\Controllers;

use App\Recipe;
use App\RecipeSubscribe;
use App\Subscription;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SubscriptionController extends Controller
{
    public function viewSubscribe(){
        $like = RecipeSubscribe::where('UserSubscribedId', Session::get('user')->UserId)->get();
        $temp=[];
        foreach($like as $l){
            array_push($temp, $l->RecipeId);
        }
        $recip = Recipe::whereIn('RecipeId', $temp)->paginate(3);

        return view('Session Login.dashboard_search_recipe', compact('recip'), compact('like'));
    }

    public function viewSubscribedUser(){
        $sub = Subscription::where('UserId', Session::get('user')->UserId)->paginate(3);
        return view('Session Login.dashboard_subscription', compact('sub'));
    }
}