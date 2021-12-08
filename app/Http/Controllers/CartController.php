<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Favorite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

//    public function getCartById(){
//        $id = Auth::id();
//
//        Cart::where('user_id', $id)->get();
//        return redirect("cart");
//    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  int $id
     * @return \Illuminate\View\View
     */
    public function store($id)
    {
//        if(!Cart::first()){
//            $item = new Cart();
//            $item->product_id = $id;
//            $item->user_id = auth::id();
//            $item->quantity = '1';
//            $item->save();
//        }
//        if(Cart::where('product_id', $id)->exists()) {
//            $item = Cart::where('product_id', $id)->first();
//            $item->increment('quantity');
//            $item->save();
//        }
        $items = Cart::where('product_id', '=', $id)->where('user_id', '=', auth::id())->get();
        if( count($items) == 0){//!Cart::where('product_id', '=', $id)->where('user_id', '=', auth::id())->exists()) {
            $item = new Cart();
            $item->product_id = $id;
            $item->user_id = auth::id();
            $item->quantity = 1;
            $item->save();
        }else{
            $item = $items[0];
            $item->increment('quantity');
            $item->save();

        }
        return redirect('cart');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::where('id', $id)->delete();
        return redirect('cart');
    }
}
