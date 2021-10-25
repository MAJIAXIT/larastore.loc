<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use mysql_xdevapi\Exception;

class UsersController extends Controller
{
    public function signIn()
    {
        return view('users.signin');
    }

    public function signInCheck(Request $request)
    {
        $valid = $request->validate([
            'login' => 'required|min:3|max:20',
            'password' => 'required|min:3|max:20'
        ]);

        $login = $request->input('login');
        $password = $request->input('password');

        $user = DB::table('users')->where(
            [
                ['login', '=', $login],
                ['password', '=', $password]
            ]
        )->first();

        if ($user == null) {
            abort(404);
        } else {
            Session::put('user', $user);
            return redirect('/');
        }
    }

    public function privateZone()
    {
        return "privateZone";
    }

    public function logOut()
    {
        Session::forget('user');
        return redirect('/');
    }

    public function signUp()
    {
        return view('users.signup');
    }

    public function signUpCheck(Request $request)
    {
        $valid = $request->validate([
            'login' => 'required|min:3|max:20',
            'password' => 'required|min:3|max:20',
            'name' => 'required|min:3|max:20',
            'email' => 'required|min:3|max:20'
        ]);
    }
}
