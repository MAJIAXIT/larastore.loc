<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class UsersController extends Controller
{
    public function signIn()
    {
        return view('users.signin');
    }

    public function signInCheck(Request $request)
    {
        $login = $request->input('login');
        $password = $request->input('password');

        $user = DB::table('users')->where(
            [
                ['login', '=', $login],
                ['password', '=', $password]
            ]
        )->first();

        if($user == null){
            return "error";
        }else{
            return "ok";
        }
    }
}
