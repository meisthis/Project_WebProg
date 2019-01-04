{{--/**--}}
 {{--* Created by PhpStorm.--}}
 {{--* User: Joseph Marcel--}}
 {{--* Date: 12/5/2018--}}
 {{--* Time: 6:42 PM--}}
 {{--*/--}}

@extends('welcome')
@section('title', 'Recipe Detail')

@section('content')
    <div class="recipeDetail-parent">
        @if(!empty($recipe))
            <div class="recipeDetail-header">
                <h2>{{$recipe->RecipeName}}</h2>

                <p>
                    Rating : {{$recipe->RecipeRating}} out of 5
                    @if(\Illuminate\Support\Facades\Session::get('login'))
                        @if(\Illuminate\Support\Facades\Session::get('user')->UserId != $recipe->UserId)
                            <form action="/recipe/{{$recipe->RecipeId}}/rate" method="get">
                                <input type="number" min="0" max="5" placeholder="Rate It" name="recipeDetailRating">
                                <input type="submit" value="Rate">
                            </form>
                        @endif
                    @endif
                </p>

                <p>
                    @if(\Illuminate\Support\Facades\Session::get('login'))
                        Made by: <a href="/dashboard/user/{{$recipe->UserId}}">{{$recipe->user->UserName}}</a>
                    @else
                        Made By : {{$recipe->user->UserName}}
                    @endif
                </p>
            </div>

            <div class="recipeDetail-img">
                <img src="/img/{{$recipe->RecipeImageName}}">
            </div>

            <div class="recipeDetail-desc">
                <h3>Ingredients</h3>
                <p>
                    @if(!empty($detail))
                        @foreach($detail as $d)
                            {{$d->ingredient->IngredientName}},
                        @endforeach
                    @endif
                </p>

                <h3>Directions</h3>
                <p>
                    {{$recipe->RecipeInstruction}}
                </p>
            </div>

            <hr>

            @if(!empty($commend))
                <div class="recipeDetail-comments">
                    <h3>Comments</h3>

                    @if(\Illuminate\Support\Facades\Session::get('login'))
                        <form action="/recipe/{{$recipe->RecipeId}}/submitCommend" method="get">
                            <textarea name="recipeDetailCommend" id="" cols="100" rows="5" placeholder="Insert Comment here"></textarea>
                            <br>
                            <input type="submit" value="Submit">
                        </form>
                    @endif

                    <ul>
                        @foreach($commend as $c)
                            <li>
                                <div class="recipe-commend">
                                    <div class="recipe-commend-header">
                                        <h4>{{$c->user->UserName}}   {{$c->created_at}}</h4>
                                    </div>

                                    <div class="recipe-commend-content">
                                        <p>
                                            {{$c->UserCommend}}
                                        </p>
                                    </div>

                                    <div class="recipe-commend-delete">
                                        @if($c->UserId == \Illuminate\Support\Facades\Session::get('user')->UserId)
                                            <a href="/recipe/{{$recipe->RecipeId}}/{{$c->RecipeCommendId}}/deleteCommend">Delete Comment</a>
                                        @endif
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif
        @endif
    </div>
@endsection