<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Models\CartItem;
use App\Http\Models\Product;
use App\Http\Models\Purchase;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;


class PurchasesController extends Controller
{
    public function makePurchase()
    {
        $user = Session::get('user');
        $userId = $user->id;

        $findCartItems = CartItem::where('user_id', '=', $userId)->get();

        foreach ($findCartItems as $cartItem){
            $purchase = new Purchase();
            $purchase->added_at = date('Y-m-d H:i:s', time());
            $purchase->user_id = $userId;
            $purchase->product_id = $cartItem->product_id;
            $purchase->save();
        }

        CartItem::where('user_id', '=', $userId)->delete();

        return redirect("/users/personalArea");
    }
}
