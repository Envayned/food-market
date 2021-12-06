<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

//    public function addToCart($id){
//        $product = Product::find($id);
//        $product-> in_cart = true;
//        $product->save();
//        return redirect('cart')->with('success', 'Product added to cart');
//        if (!$product){
//            abort(404);
//        }
//        $cart = session()->get('cart');
//        if(!$cart){
//
//            $cart = [
//                $id => [
//                    "name" => $product->name,
//                    "quantity" => 1,
//                    "price" => $product->price,
//                    "description" => $product->description
//                ]
//            ];
//            session()->put('cart', $cart);
//            return redirect('cart')->with('success', 'Product added to cart');
//        }
//         if(isset($cart[$id])) {
//             $cart[$id]['quantity']++;
//             session()->put('cart', $cart);
//             return redirect('cart')->with('success', 'Product added to cart');
//         }
//        $cart[$id] = [
//            "name" => $product->name,
//            "quantity" => 1,
//            "price" => $product->price,
//            "photo" => $product->photo
//        ];
//        session()->put('cart', $cart);
//        return redirect('cart')->with('success', 'Product added to cart');
//
//    }

//    public function removeFromCart($id){
//        $product = Product::find($id);
//        $product-> in_cart = false;
//        $product->save();
//        return redirect('cart');
//    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return View
     */
    public function show($id)
    {
        return view('product', [
           'product' => Product::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
//     * @param  Request $request
     * @param int $id
     * @return View
     */
    public function destroy($id)
    {
        Product::where('id', $id)->delete();
        return redirect('products');
    }
}
