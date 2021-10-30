<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    public function getByCategoryId($id)
    {
        $findedProducts = DB::table('products')->where('category_id', '=', $id)->get();
        return view('products.getByCategoryId')->with('products', $findedProducts);
    }

    public function productDescription(Request $request)
    {
        $id = $request->input('id');
        $product = DB::table('products')->where('id', '=', $id)->get();
        return view('products.productDescription')->with('products', $product);
    }

    public function home(Request $request)
    {
        $user = session('user');
        return view('home')->with('user', $user);
    }
}
