
@extends('welcome')
@section('title', 'Sign In')
@section('content')
    <div class="">
          
            {{csrf_field()}}
            @foreach($login as $l)
            <p> hello $l</p>
            @endforeach

        @if(\Illuminate\Support\Facades\Session::has('alert'))
            {{\Illuminate\Support\Facades\Session::get('alert')}}
        @endif

        {{--@if($errors->any())--}}
            {{--@foreach($errors->all() as $e)--}}
                {{--<p>{{$e}}</p>--}}
            {{--@endforeach--}}
        {{--@endif--}}

    </div>
@endsection