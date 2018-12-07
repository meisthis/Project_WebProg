<?php

namespace App\Http\Controllers;

use function Couchbase\defaultDecoder;
use Illuminate\Http\Request;
use App\Users;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{
    public function userLogin(Request $req)
    {
      $validator = Validator::make($req->all(), [
          "signInEmail" => "required|email",
          "signInPassword" => "required|alphaNum|min:3"
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }else{
            $email = $req->signInEmail;
            $password = $req->signInPassword;

            $login = Users::where('User_Email', $email)->first();

            if ($login != null) {
                if ($password == $login->User_Password) {
                    Session::put('login', true);
    //                dd(Session::get('login'));
                    return redirect('/');
                } else {
                    return redirect('/signin')->with('alert', 'Invalid password');
                }
            } else {
                return redirect('/signin')->with('alert', 'Email and Password can not be empty');
            }
        }
    }

    public function signOut(){
        Session::flush();
        return redirect('/home');
    }

    public function registerUser(Request $req)
    {
        $validator = Validator::make($req->all(), [
            "registerName" => "required|alphaNum|min:3",
            "registerEmail" => "required|email",
            "registerPassword" => "required|alphaNum|min:6",
            "registerAddress" => "required:alphaNum",
            "registerPhoneNumber" => "required|numeric",
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $user = new Users();
            $user->User_Name = $req->registerName;
            $user->User_Email = $req->registerEmail;
            $user->User_Password = $req->registerPassword;
            $user->User_address = $req->registerAddress;
            $user->User_phone = $req->registerPhoneNumber;
            $user->save();
            return redirect('/signin');
        }
    }
}
