@extends('welcome')
@section('title', 'Insert New Recipe Page');
@section('content')
    <div class="new-recipe-parent">
        <div class="new-recipe-header">
            <h1>Insert New Recipe Form</h1>
        </div>
        <hr>

        <div class="new-recipe-content">
            <form action="/dashboard/recipe/insertNewRecipe/submit" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="new-recipe-form">
                    <input type="text" placeholder="Recipe Name" name="insertRecipeName" value="{{old('insertRecipeName')}}">
                    <br>
                    <input type="text" placeholder="Recipe Description" name="insertRecipeDescription" value="{{old('insertRecipeDescription')}}">
                    <br>
                    <input type="file" name="insertRecipeImage">
                    <br>
                    <input type="text" placeholder="Input your hyperlink" name="insertRecipeHyperlink" value="{{old('insertRecipeHyperlink')}}">
                    <br>
                </div>

                <div class="new-recipe-checkbox">
                    @if(!empty($ingredient))
                        @foreach($ingredient as $i)
                            <input type="checkbox" name="{{$i->IngredientId}}" value="{{$i->IngredientId}}">{{$i->IngredientName}}
                        @endforeach
                    @endif
                </div>

                <textarea name="insertRecipeInstruction" id="" cols="100" rows="10" placeholder="Instruction" value="{{old('insertRecipeInstruction')}}"></textarea>
                <br>
                <input type="submit" value="Submit">
            </form>
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