@extends('welcome')
@section('title', 'Update Recipe Page');
@section('content')
    <div class="new-recipe-parent">
        <div class="new-recipe-header">
            <h1>Update Recipe Form</h1>
        </div>
        <hr>

        <div class="new-recipe-content">
            @if(!empty($recipeDetail))
            <form action="/dashboard/recipe/update/{{$recipeDetail->first()->RecipeId}}/submit" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="new-recipe-form">
                        <input type="text" placeholder="Recipe Name" name="updateRecipeName" value="{{$recipeDetail->first()->recipe->RecipeName}}">
                        <br>
                        <input type="text" placeholder="Recipe Description" name="updateRecipeDescription" value="{{$recipeDetail->first()->recipe->RecipeDescription}}">
                        <br>
                        <input type="file" name="updateRecipeImage">
                        <br>
                        <input type="text" name="updateRecipeHyperlink" value="{{$recipeDetail->first()->recipe->RecipeHyperlink}}">
                        <br>
                </div>

                <div class="new-recipe-checkbox">

                    @if(!empty($ingredient))
                        @foreach($ingredient as $i)
                            {{--@foreach($recipeDetail as $r){--}}
                                {{--@if($i->IngredientId == $r->IngredientId){--}}
                                    {{--@php--}}
                                        {{--$checked = "";--}}
                                    {{--@endphp--}}
                                {{--@else--}}
                                    {{--@php--}}
                                        {{--$checked = "checked";--}}
                                    {{--@endphp--}}
                                {{--@endif--}}
                            {{--@endforeach--}}

{{--                            @if($checked == true)--}}
                                <input type="checkbox" name="{{$i->IngredientId}}">{{$i->IngredientName}}
                            {{--@else--}}
                                {{--<input type="checkbox" name="{{$i->IngredientId}}">{{$i->IngredientName}}--}}
                            {{--@endif--}}
                        @endforeach
                    @endif
                </div>
                <textarea name="updateRecipeInstruction" value="{{$recipeDetail->first()->recipe->RecipeInstruction}}" cols="100" rows="10"></textarea>
                <br>
                <input type="submit" value="Submit">
            </form>
            @endif
        </div>

        <div class="alert">
            @if($errors->any())
                @foreach($errors->all() as $e)
                    <p>{{$e}}</p>
                @endforeach
            @endif
        </div>
    </div>
@endsection