<?php

namespace App\Http\Controllers;

use App\Helper\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function inde(Cart $cart){
        return view('trangchu/Viewcart',compact('cart'));
    }

    public function addcart($id, Cart $cart){
        $sp=Product::find($id);
        $cart->Add($sp,1);
        return redirect()->route('view.cart');
    }
    public function delete_cart($id, Cart $cart){
        $cart->Delete($id);
        return redirect()->route('view.cart');
    }
    public function update(Request $request,Cart $cart){
        $id=$request['ma'];
        $sl=$request['sl'];
        $cart->Update($id,$sl);
        return redirect()->route('view.cart');
    }

    public function clear_cart(Cart $cart){
        $cart->clear();
        return redirect()->route('view.cart');
    }
    //
}
