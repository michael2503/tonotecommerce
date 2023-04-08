<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ShoppingCart;
use App\Traits\ShoppingCartTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShoppingCartController extends Controller
{

    use ShoppingCartTrait;


    public function addToCart($id)
    {
        $product = Product::find($id);
        $userID = Auth::user()->id;
        if(!$product){
            abort(404);
        }

        $cart = $this->getCart($userID, $id);

        if(!$cart){
            $this->createCart($userID, $id);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        if($cart) {
            if($cart->qty == ($product->quantity - $product->sold) ){
                return redirect()->back()->with('error', 'You can not add more of this product!');
            }
            $this->updateCart($userID, $id, $cart->qty);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
    }


    public function removeFromCart($id)
    {
        $product = Product::find($id);
        $userID = Auth::user()->id;
        if(!$product){
            abort(404);
        }

        $cart = $this->getCart($userID, $id);
        if($cart) {
            if($cart->qty == 1 ){
                $cart->delete();
                return redirect()->back()->with('error', 'Product removed from cart successfully!');
            }
            $this->removeCart($userID, $id, $cart->qty);
            return redirect()->back()->with('success', 'Product removed from cart successfully!');
        }
    }


    public function viewCartList()
    {
        $carts = ShoppingCart::where('user_id', Auth::user()->id)->with('product')->get();
        return view("guest.carts", [
            'carts' => $carts
        ]);
    }


    public function deleteCart($id)
    {
        if($id) {
            $userID = Auth::user()->id;
            $cart = $this->getCart($userID, $id);
            if($cart) {
                $cart->delete();
                return redirect()->back()->with('success', 'Cart successfully deleted!');
            }
            return redirect()->back();
        }
        return redirect()->back();
    }



}
