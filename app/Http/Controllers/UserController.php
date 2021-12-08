<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
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
     * Make a user an admin if you're an admin
     *
     * @param int $id
     *
     */
    public function makeAdmin($id){
        if (Auth::user()->is_admin){
            $user = User::where('id', $id)->first();
            $user->is_admin = 1;
            $user->save();
        }
        else{
            return redirect('dashboard');
        }
        return redirect('users');
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
     * @param
     * @return
     */

    public function show()
    {
        if (Auth::user()->is_admin){
            return view('users', [
                'user' => User::all()
         ]);
        }
        else{
            return redirect('dashboard');
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return
     *
     */
    public function destroy($id)
    {
        if (Auth::user()->is_admin) {
            User::where('id', $id)->delete();
            return redirect('users');
        }
        else{
            return redirect('dashboard');
        }
    }
    public function deleteReports($id){
        if(Auth::user()->is_admin){
            $user = User::where('id', $id)->first();
            $user->reports = '0';
            $user->save();
            return redirect('users');
        }
        return redirect('dashboard');

    }

    public function report($id){
        $user = User::where('id', $id)->first();
        $user->increment('reports');
        $user->save();
        return redirect('users');
    }

    public function deleteUser(){
        User::where('id', Auth::id())->delete();
        return redirect('login');
    }
}
