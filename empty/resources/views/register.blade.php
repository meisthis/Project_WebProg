@extends('welcome')

@section('title', 'Register Page')

@section('content')
    <form onsubmit="return false;">
        <div class="content-fill">
            <h1>Register</h1><br>
            <hr>
            <br>
            <label for="name"><b>Name : </b></label>
            <input type="text" placeholder="Enter your name" name="name" id="name"><br><br>

            <label for="email"><b>Email : </b></label>
            <input type="text" placeholder="Enter email" name="email" id="email"><br><br>

            <label for="psw"><b>Password : </b></label>
            <input type="password" placeholder="Enter password" name="password" id="password"><br><br>

            <label for="address"><b>Address : </b></label>
            <input type="text" placeholder="Enter your address" name="address" id="address"><br><br>

            <label for="gender"><b>Gender : </b></label>
            <input type="radio" name="gender" id="male"> Male
            <input type="radio" name="gender" id="female"> Female
            <br><br>
            <label for="city"><b>City : </b></label>
            <select id="city">
                <option value="choose">--Choose--</option>
                <option value="jakarta">Jakarta</option>
                <option value="bandung">Bandung</option>
                <option value="tangerang">Tangerang</option>
            </select>
            <p id="error-message"></p>
            <br>
            <button class="registerbtn" id="register">Register</button>
        </div>
    </form>
@endsection
