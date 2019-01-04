@extends('welcome')

@section('title', 'Register Page')

@section('content')
        <div class="content-fill">
            <h1>Register</h1><br>
            <hr>
            <br>

            <form action="/registerUser" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <label for="name"><b>Name : </b></label>
                <input type="text" placeholder="Enter your name" name="registerName" id="name" value="{{old('registerName')}}"><br><br>

                <label for="email"><b>Email : </b></label>
                <input type="text" placeholder="Enter email" name="registerEmail" value="{{old('registerEmail')}}"><br><br>

                <label for="psw"><b>Password : </b></label>
                <input type="password" placeholder="Enter password" name="registerPassword" id="password"><br><br>

                <label for="address"><b>Address : </b></label>
                <input type="text" placeholder="Enter your address" name="registerAddress" id="address" value="{{old('registerAddress')}}"><br><br>

                <label for="phone"><b>Phone Number : </b></label>
                <input type="text" placeholder="Enter your phone number" name="registerPhoneNumber" value="{{old('registerPhoneNumber')}}"><br><br>

                {{--<label for="image"><b>Insert Image : </b></label>--}}
                {{--<input type="file" name="registerPicture"><br><br>--}}
                <button class="registerbtn" id="register">Register</button>
            </form>
        </div>

        @if($errors->any())
            <div class="error">
                <p id="error-message">{{$errors->first()}}</p>
            </div>
        @endif
@endsection
