<?php

namespace App\Http\Controllers;

use App\Recipe;
use App\Subscription;
use Carbon\Carbon;
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

            $login = Users::where('UserEmail', $email)->first();

            if ($login != null) {
                if (Hash::check($password, $login->UserPassword)) {
                    Session::put('login', true);
                    Session::put('user', $login);
                    return redirect('/dashboard');
                } else {
                    return redirect('/signin')->with('alert', 'Invalid password');
                }
            } else {
                return redirect('/signin')->with('alert', 'Email and Password can not be empty');
            }
        }
    }

    public function signOut(){
        $user = Session::get('user');
        $user->updated_at = Carbon::now();
        $user->save();

        Session::flush();
        return redirect('/');
    }

    public function registerUser(Request $req)
    {
        $validator = Validator::make($req->all(), [
            "registerName" => "required|min:3",
            "registerEmail" => "required|email",
            "registerPassword" => "required|min:6",
            "registerAddress" => "required",
            "registerPhoneNumber" => "required|numeric",
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $user = new Users();
            $user->UserName = $req->registerName;
            $user->UserEmail = $req->registerEmail;
            $user->UserPassword = Hash::make($req->registerPassword);
            $user->UserAddress= $req->registerAddress;
            $user->UserPhone= $req->registerPhoneNumber;
            $user->save();
            return redirect('/signin');
        }
    }

    public function viewProfile($id){
        $recipe = Recipe::where('UserId', $id)->paginate(3);
        $user = Users::where('UserId', $id)->first();
        $subs= Subscription::where('UserSubscribedId', $id)->where('UserId', Session::get('user')->UserId)->first();

        return view('Session Login.view_profile', compact('user'), compact('recipe'))->with(compact('subs'));
    }

    public function subscribeUser($id){
        $subs = Subscription::where('UserSubscribedId', $id)->where('UserId', Session::get('user')->UserId)->first();

        if($subs == null) {
            $sub = new Subscription();
            $sub->UserId = Session::get('user')->UserId;
            $sub->UserSubscribedId = $id;
            $sub->save();
        }
        return redirect()->back();
    }

    public function unsubscribeUser($id){
        Subscription::where('UserSubscribedId', $id)->where('UserId' , Session::get('user')->UserId)->delete();

        return redirect()->back();
    }
}
