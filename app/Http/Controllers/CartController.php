<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function index(){
        $user = User::find(Auth::user()->id);
        $currentuser = Auth::user()->email;
        if($user){
        $cart = Cart::where('user',$currentuser)->get();
        // $cart = Cart::all();

        //getting total price
            //try one
        // $price = DB::table('carts')
        //         ->where('user', $currentuser)
        //         ->sum('cart_prod_price');
            //try two
        $price = Cart::where('user', $currentuser)->sum('cart_prod_price');

        return view('pages.cart', compact('cart','price'));
        }
        else{
            return redirect()->back();
        }
    }
    
}
