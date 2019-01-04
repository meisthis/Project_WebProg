@extends('welcome')

@section('title', 'Home Page')

@section('content')
    <div class="instruction">
        <h1>Choose Your Ingredient</h1>
    </div>
    <div class="ingredient">
        <div class="ingredient-label">
            <h3>Filter</h3>
            <div class="label">
                @if(!empty($label))
                    @foreach($label as $i){{--kalau pakai laravel uncomment, matiin onclick--}}
                        {{--<form action="/label" method="get" enctype="multipart/form-data">--}}
                            <button><a href="/home/label/{{$i->LabelId}}">{{$i->LabelName}}</a></button>
                        {{--</form>--}}
                    @endforeach
                    <button><a href="/home">All</a></button>
                @endif
            </div>
        </div>

        <div class="ingredient-list">
            <div class="ingredient-title">
                <h3>Ingredient List</h3>
            </div>

            <div class="ingredient-checkbox">
                <form  action="/submitIngredient" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div id="input-checkbox">
                        @if(!empty($ingredient))
                            @foreach($ingredient as $i)
                                <input type="checkbox" name="{{$i->IngredientId}}">{{$i->IngredientName}}
                                <br>
                            @endforeach
                        @endif
                    </div>

                    <div class="input-button">
                        <input type="submit" name="submitIngredient">
                    </div>
                </form>
            </div>

            <div class="ingredient-tags">
                <div class="tags-title">
                    <h3>Tags : </h3>
                </div>
                <form action="/submitIngredient/search" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="tags">
                        @if(!empty($tag))
                            @foreach($tag as $t)
                                <span class="tag-span">{{$t->ingredient->IngredientName}}
                                    <a href="/home/removeTags/{{$t->TagId}}">x</a>
                                </span>
                            @endforeach
                        @endif
                    </div>

                    <div class="tags-button">
                        <input type="submit" name="submitSearch">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection