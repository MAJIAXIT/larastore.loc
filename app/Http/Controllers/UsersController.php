<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Models\CartItem;
use App\Http\Models\Product;
use App\Http\Models\Purchase;
use App\Http\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use mysql_xdevapi\Exception;

/**
 * Configure the validator instance.
 *
 * @param  \Illuminate\Validation\Validator  $validator
 * @return void
 */

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
            return redirect('users/signin')->withErrors("User not found")->withInput();
        } else {
            Session::put('user', $user);
            return redirect('/');
        }
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

        $user = new User();
        $user->login = $request->input('login');
        $user->password = $request->input('password');
        $user->name = $request->input('name');
        $user->email = $request->input('email');

        $user_exists = DB::table('users')->where(
            [
                ['login', '=', $user->login]
            ]
        )->first();

        if ($user_exists == null) {

            $user->save();
            Session::forget('user');
            Session::put('user', $user);
            return redirect('/');

        } else {
            return redirect('users/signup')->withErrors("User with this login already exist")->withInput();
        }
    }

    public function personalArea(){

        $user = Session::get('user');
        $userId = $user->id;

        $purchases = Purchase::where('user_id', '=', $userId)->get()->unique('product_id');
        return view('users.personalArea')->with('purchases', $purchases);
    }

    public function personalAreaCheck(Request $request){
        $valid = $request->validate([
            'login' => 'required|min:3|max:20',
            'password' => 'required|min:3|max:20',
            'name' => 'required|min:3|max:20',
            'email' => 'required|min:3|max:20'
        ]);

        $login = $request->input('login');
        $password = $request->input('password');
        $name = $request->input('name');
        $email = $request->input('email');

        $user_exists = DB::table('users')->where(
            [
                ['login', '=', $login]
            ]
        )->first();

        if ($user_exists == null or $login) {

            DB::table('users')->where('login','=', $login)->update(
                [
                    'name' => $name,
                    'email' => $email,
                    'login' => $login,
                    'password' => $password
                ]
            );

            Session::forget('user');
            $user = DB::table('users')->where('login', '=', $login)->first();
            Session::put('user', $user);
            return redirect('users/personalArea');
        } else {
            return redirect('users/personalArea')->withErrors("User with this login already exist")->withInput();
        }
    }
}
