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

    public function productDescription($id)
    {
        $product = DB::table('products')->where('id', '=', $id)->get();
        return view('products.productDescription')->with('products', $product);
    }


    public function home()
    {
        $findProducts = DB::table('products')->get()->all();

        return view('home')->with('products', $findProducts);
    }
}
