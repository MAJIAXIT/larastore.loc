<?php

namespace App\Http\Controllers;

use App\Http\Models\CartItem;
use http\QueryString;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function viewAllItemsForUser()
    {
        $user = Session::get('user');
        $userId = $user->id;

        $cartItems =  CartItem::where('user_id','=', $userId)->get()->unique('product_id');

        return view('cart.viewAllItemsByUserId')->with('cartItems', $cartItems);
    }

    public function addNewItemToUser($productId)
    {
        $user = Session::get('user');
        $userId = $user->id;

        $cartItem = new CartItem();
        $cartItem->user_id = $userId;
        $cartItem->product_id = $productId;
        $cartItem->save();
    }

    public function deleteItemById($id)
    {
        $user = Session::get('user');
        $userId = $user->id;
        CartItem::where(
            [
                ['user_id', '=', $userId],
                ['product_id', '=', $id]
            ]
        )->delete();
    }

    public function getCountItemsForUser()
    {
        $user = Session::get('user');
        $userId = $user->id;

        return CartItem::where('user_id','=',$userId)->count();
    }
}
