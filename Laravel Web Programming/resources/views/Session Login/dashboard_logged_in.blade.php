@extends('welcome')
@section('title', 'Dashboard')
@section('content')
    <div class="content-parent">
        <div class="content-img">
            <img src="img/black.jpg">
            <div class="content-img-text content-img-text--fadeinup">
                Welcome, {{\Illuminate\Support\Facades\Session::get('user')->UserName}} !
            </div>

            <div class="content-img-text1 content-img-text--fadeinup">
                <div class="content-img-textLeft">
                    <p>You have already uploaded {{$totalRecipe}} recipes</p>
                    <p>Your recipe has been {{$viewerRecipe}} times viewed</p>
                </div>
                <div class="content-img-textRight">
                    <p>You have been subscribed by {{$subscribed}} user</p>
                    <p>Number of recipe liked {{$like}}</p>
                </div>
            </div>
        </div>
    </div>
@endsection