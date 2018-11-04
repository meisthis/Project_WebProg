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
                    {{$j=0}}
                    @foreach($label as $i)
                        <button onclick="{{$labelClick[$j++]}}">{{$i}}</button>
                    @endforeach
                @endif
            </div>
        </div>

        <div class="ingredient-list">
            <h3>Ingredient List</h3>
            <form  action="/submit" method="post">
                {{csrf_field()}}
                <div id="input-checkbox">

                </div>

                <div class="input-button">
                    <input type="submit" name="">
                </div>
            </form>
        </div>
    </div>
@endsection