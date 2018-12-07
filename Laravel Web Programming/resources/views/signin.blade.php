{{--/**--}}
 {{--* Created by PhpStorm.--}}
 {{--* User: Joseph Marcel--}}
 {{--* Date: 12/3/2018--}}
 {{--* Time: 8:03 PM--}}
 {{--*/--}}

@extends('welcome')
@section('title', 'Sign In')
@section('content')
    <div class="login-form">
        <form action="/signInRequest" method="POST" enctype="multipart/form-data">
            {{--<hr>--}}
            <h3>Sign In</h3>
            <hr>
            {{csrf_field()}}
            <input type="text" name="signInEmail" placeholder="Email">
            <input type="password" name="signInPassword" placeholder="Password">
            <input type="submit" value="Sign In" name="signInSubmit">
            <br>
            {{--<a href="/register">Don't have an account? Register Here!</a>--}}
            <p>Not Registered? <a href="/register">Sign Up here</a></p>
            <br>
            <br>
        </form>

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