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
                    <a href="/recipe/{{$recipe->Recipe_Id}}">
                        <div class="recipes_content">
                            <img src="{{asset($recipe->Recipe_Picture_Name)}}">
                            <div class="recipes_content_description">
                                <p>Recipe Name : <span>{{$recipe->Recipe_Name}}</span></p>
                                <p>Recipe Description : <span>{{$recipe->Recipe_Desc}}</span></p>
                                <p>Recipe Rating : <span>{{$recipe->Recipe_Rating}}</span> out of 5</p>
                            </div>
                        </div>
                    </a>
                @endforeach
                {{--{{$result->render()}}--}}
            @else
                <h1>Sorry, we can not find the recipe that is related</h1>
            @endif
        </div>
    </div>


@endsection