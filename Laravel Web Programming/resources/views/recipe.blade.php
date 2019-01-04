@extends('welcome')

@section('title', 'Recipe Page')

@section('content')
    <h1>Recipes</h1>
    <hr>

    <div class="recipes">
        <div class="search">
            <form action="/searchByName" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <input type="text" name="searchInput" placeholder="Search By Name">
                <input type="submit" name="searchIngredient" value="Search">
            </form>
        </div>

        <div class="sub_recipes">
            @if(!empty($recipes))
                @foreach($recipes as $recipe)
                    <a href="/recipe/{{$recipe->RecipeId}}">
                        <div class="recipes_content">
                            <img src="/img/{{$recipe->RecipeImageName}}">
                            <div class="recipes_content_description">
                                <p>Recipe Name : <span>{{$recipe->RecipeName}}</span></p>
                                <p>Recipe Description : <span>{{$recipe->RecipeDescription}}</span></p>
                                <p>Recipe Rating : <span>{{$recipe->RecipeRating}}</span> out of 5</p>
                                <p>Made By : <span>{{$recipe->user->UserName}}</span></p>
                                <p>
                                    Ingredient :
                                    @foreach($recipe->recipeDetail as $rd)
                                        {{$rd->ingredient->IngredientName}},
                                    @endforeach
                                </p>
                            </div>
                        </div>
                    </a>
                @endforeach
                {{$recipes->render()}}
            @endif

            @if(!empty($recip))
                @foreach($recip as $r)
                    <a href="/recipe/{{$r->RecipeId}}">
                        <div class="recipes_content">
                            <img src="/img/{{$r->RecipeImageName}}">
                            <div class="recipes_content_description">
                                <p>Recipe Name : <span>{{$r->RecipeName}}</span></p>
                                <p>Recipe Description : <span>{{$r->RecipeDescription}}</span></p>
                                <p>Recipe Rating : <span>{{$r->RecipeRating}}</span> out of 5</p>
                                <p>Made By : <span>{{$r->user->UserName}}</span></p>
                                <p>
                                    Ingredient :
                                    @foreach($r->recipeDetail as $i)
                                        {{$i->ingredient->IngredientName}},
                                    @endforeach
                                </p>
                            </div>
                        </div>
                    </a>
                @endforeach
                {{$recip->render()}}
            @endif
        </div>
    </div>


@endsection