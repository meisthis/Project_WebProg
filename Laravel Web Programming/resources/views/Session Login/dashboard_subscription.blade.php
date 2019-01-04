@extends('welcome')
@section('title', 'Recipe Page')
@section('content')
    <div class="recipe-parent">
        <h1>User Subscription</h1>
        <hr>
        <br>
        <div class="recipe-content">
            @if(!empty($sub))
                <ul>
                    @foreach($sub as $s)
                        <a href="/dashboard/user/{{$s->UserSubscribedId}}">
                            <div class="recipes_content">
                                <div class="recipes_content_description">
                                    <li>
                                        <p>User Name : <span>{{$s->userSubscribed->UserName}} <br>  Last Update/Insert Recipe : {{$s->LastLoggedIn}}</span></p>
                                    </li>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </ul>
                {{$sub->render()}}
            @endif
        </div>
    </div>
@endsection