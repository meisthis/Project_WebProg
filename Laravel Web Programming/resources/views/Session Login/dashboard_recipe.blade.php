@extends('welcome')
@section('title', 'Recipe Page')
@section('content')
    <div class="recipe-parent">
        <div class="recipe-header">
            {{--<a href="/dashboard/recipe">View Own Recipe</a>--}}
            <a href="/dashboard/recipe/subscription">Subscription Recipe</a>
            <a href="/dashboard/recipe/insertNewRecipe">Insert New Recipe</a>
            <a href="/dashboard/recipe/searchRecipe">Search Recipe</a>
        </div>
        <hr>
        <div class="recipe-content">
            @if(!empty($recipe))
                @foreach($recipe as $r)
                    <a href="/recipe/{{$r->RecipeId}}">
                        <div class="recipes_content">
                            <img src="/img/{{$r->RecipeImageName}}">
                            <div class="recipes_content_description">
                                <p>Recipe Name : <span>{{$r->RecipeName}}</span></p>
                                <p>Recipe Description : <span>{{$r->RecipeDescription}}</span></p>
                                <p>Recipe Rating : <span>{{$r->RecipeRating}}</span> out of 5</p>
                                <p>
                                    Ingredient :
                                    @foreach($r->recipeDetail as $i)
                                        {{$i->ingredient->IngredientName}},
                                    @endforeach
                                </p>

                                <p>
                                    <form action="/dashboard/recipe/update/{{$r->RecipeId}}" method="get">
                                        <input type="submit" value="Update">
                                    </form>

                                    <form action="/dashboard/recipe/delete/{{$r->RecipeId}}" method="get">
                                        <input type="submit" value="Delete">
                                    </form>
                                </p>
                            </div>
                        </div>
                    </a>
                @endforeach
                {{$recipe->render()}}
            @endif
        </div>
    </div>
@endsection