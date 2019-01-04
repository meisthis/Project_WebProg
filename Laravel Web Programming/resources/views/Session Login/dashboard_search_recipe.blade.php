@extends('welcome')

@section('title', 'Recipe Page')

@section('content')
    <h1>Recipes</h1>
    <hr>

    <div class="recipes">
        <div class="search">
            <form action="/dashboard/recipe/searchByName" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <input type="text" name="searchInput" placeholder="Search By Name">
                <input type="submit" name="searchIngredient" value="Search">
            </form>
        </div>

        <div class="sub_recipes">
            @if(!empty($recip))
                @foreach($recip as $r)
                    @if($r->UserId != \Illuminate\Support\Facades\Session::get('user')->UserId)
                        <a href="/recipe/{{$r->RecipeId}}">
                            <div class="recipes_content">
                                <img src="/img/{{$r->RecipeImageName}}">
                                <div class="recipes_content_description">
                                    <p>Recipe Name : <span>{{$r->RecipeName}}</span></p>
                                    <p>Recipe Description : <span>{{$r->RecipeDescription}}</span></p>
                                    <p>Recipe Rating : <span>{{$r->RecipeRating}}</span> out of 5</p>
                                    <p>
                                        <form action="/dashboard/user/{{$r->user->UserId}}">
                                            <input type="submit" value=" Made By : {{$r->user->UserName}}">
                                        </form>

                                        <form action="/dashboard/recipe/{{$r->RecipeId}}/like">
                                            <input type="submit"
                                                @php
                                                    $value = 'Like';
                                                    if(!empty($like)){
                                                        foreach($like as $l){
                                                            if($r->RecipeId == $l->RecipeId){
                                                                $value="Unlike";
                                                                break;
                                                            }else{
                                                                $value="Like";
                                                             }
                                                         }
                                                     }
                                                    else{
                                                     $value="Like";
                                                    }
                                                @endphp
                                            value="{{$value}}">
                                        </form>
                                    </p>

                                    <p>
                                        Ingredient :
                                        @foreach($r->recipeDetail as $i)
                                            {{$i->ingredient->IngredientName}},
                                        @endforeach
                                    </p>
                                </div>
                            </div>
                        </a>
                    @endif
                @endforeach
                {{$recip->render()}}
            @endif
        </div>
    </div>
@endsection