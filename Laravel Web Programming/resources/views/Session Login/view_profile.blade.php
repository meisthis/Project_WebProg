@extends('welcome')
@section('title', 'View Profile Page')
@section('content')
    <div class="view-profile-parent">
        <h1>Profile Information</h1>
        <hr>
        <br>
        <div class="view-profile-information">
            @if(!empty($user))
                <p>User Name : {{$user->UserName}}</p>
                <p>User Email : {{$user->UserEmail}}</p>
                <p>User Address : {{$user->UserAddress}}</p>
                <p>User Phone Number : {{$user->UserPhone}}</p>
                @if(empty($subs) || $subs->UserSubscribedId != $user->UserId)
                    <p><a href="/dashboard/user/{{$user->UserId}}/subscribe">Click to Subscribe</a></p>
                @elseif(!empty($subs) || $subs->UserSubscribedId == $user->UserId)
                    <p><a href="/dashboard/user/{{$user->UserId}}/unsubscribe">Click to Unsubscribe</a></p>
                @endif
            @endif
        </div>

        <div class="view-profile-recipe">
            @if(!empty($recipe))
                @foreach($recipe as $r)
                    <a href="/recipe/{{$r->RecipeId}}">
                        <div class="view-profile-recipe-image">
                            <img src="/img/{{$r->RecipeImageName}}" alt="">
                        </div>

                        <div class="view-profile-recipe-info">
                            <p>{{$r->RecipeName}}</p>
                            <p>{{$r->RecipeRating}} out of 5</p>
                        </div>
                    </a>
                @endforeach
                {{$recipe->render()}}
            @endif
        </div>
    </div>
@endsection