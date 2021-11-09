<?php

namespace App\Http\Controllers;
use App\Http\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    public function getByCategoryId($id)
    {
        $findProducts = Product::where('category_id', '=', $id)->get();

        return view('products.getByCategoryId')->with('products', $findProducts);
    }

    public function productDescription(Request $request)
    {
        $id = $request->input('id');
        $product = DB::table('products')->where('id', '=', $id)->get();
        return view('products.productDescription')->with('products', $product);
    }

    public function addToBasket()
    {
        return 'product in the basket';
    }

    public function home(Request $request)
    {
        $user = session('user');
        return view('home')->with('user', $user);
    }
}
