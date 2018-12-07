@extends('welcome')

@section('title', 'Register Page')

@section('content')
    <form action="/registerUser" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="content-fill">
            <h1>Register</h1><br>
            <hr>
            <br>
            <label for="name"><b>Name : </b></label>
            <input type="text" placeholder="Enter your name" name="registerName" id="name"><br><br>

            <label for="email"><b>Email : </b></label>
            <input type="text" placeholder="Enter email" name="registerEmail" id="email"><br><br>

            <label for="psw"><b>Password : </b></label>
            <input type="text" placeholder="Enter password" name="registerPassword" id="password"><br><br>

            <label for="address"><b>Address : </b></label>
            <input type="text" placeholder="Enter your address" name="registerAddress" id="address"><br><br>

            <label for="phone"><b>Phone Number : </b></label>
            <input type="text" placeholder="Enter you Phone Number" name="registerPhoneNumber" id="phone"><br><br>

            {{--<label for="image"><b>Insert Image : </b></label>--}}
            {{--<input type="file" name="registerPicture"><br><br>--}}

            @if($errors->any)
                <p id="error-message">{{$errors->first()}}</p>
            @endif

            <br>
            <button class="registerbtn" id="register">Register</button>
        </div>
    </form>
@endsection
