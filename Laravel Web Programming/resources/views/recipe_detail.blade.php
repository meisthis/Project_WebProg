{{--/**--}}
 {{--* Created by PhpStorm.--}}
 {{--* User: Joseph Marcel--}}
 {{--* Date: 12/5/2018--}}
 {{--* Time: 6:42 PM--}}
 {{--*/--}}

@extends('welcome')
@section('title', 'Recipe Detail')

@section('content')
    @if(!empty($recipe))
        <div class="content-recipe-detail">
            <h1>Detail Recipe</h1>
            <p>{{$recipe->Recipe_Name}}</p>
        </div>
    @endif
@endsection