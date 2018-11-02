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
                {{--@if(!empty($label))--}}
                    {{--@foreach($label as $i)--}}
                        {{--<button class="{{$i}}">{{$i}}</button>--}}
                    {{--@endforeach--}}
                {{--@endif--}}
                <button id="ingredient-label-meat" onclick="labelMeat()">Meat</button>

                <button id="ingredient-label-vegetable" onclick="labelVegetable()">Vegetable</button>

                <button id="ingredient-label-spice" onclick="labelSpice()">Spices</button>

                <button id="ingredient-label-noodle" onclick="labelNoodle()">Noodle</button>

                <button id="ingredient-label-fruit" onclick="labelFruit()">Fruit</button>

                <button id="ingredient-label-etc" onclick="labelETC()">ETC</button>
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