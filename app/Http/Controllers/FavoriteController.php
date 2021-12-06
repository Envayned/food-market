<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  $id
     * @return \Illuminate\View\View
     */
    public function store($id)
    {

        if( !Favorite::where('product_id', '=', $id)->where('user_id', '=', auth::id())->exists()) {
            $favorite = new Favorite();
            $favorite->product_id = $id;
            $favorite->user_id = auth::id();
            $favorite->save();
        }
        return redirect('favorites');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        return view('favorite', [
            'favorite' => Favorite::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Favorite  $favorite
     * @return \Illuminate\Http\Response
     */
    public function edit(Favorite $favorite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Favorite  $favorite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Favorite $favorite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Favorite::where('id', $id)->delete();
        return redirect('favorites');
    }

    /**
     * Get favorites by user_id.
     *
     * @param $query
     *
     * @return $query
     */
    public function getByUserId(){
        return view('favorites', [
            'favorites' => Favorite::where('user_id', Auth::id())->get()
        ]);
    }

}
