<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\job;
use Auth;

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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|min:2|max:100',
            'surname' =>'required|string|min:2|max:100',
            'email' => 'required|string|min:3|max:50',
        ]);
        $user = User::find(Auth::id());
        $user->name = $request['name'];
        $user->surname = $request['surname'];
        $user->email = $request['email'];
        $user->save();
        
        $user = User::find(Auth::id());
        if ($user) return view('user.profile')->withUser($user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function profile($id)
    {
        $user = User::find($id);
        if ($user && Auth::id() == $id){
            return view('user.profile')->withUser($user);
        }else {
            return redirect()->back();
        }
    }
    public function joblist($id)
    {
        $user = User::find($id);
        if ($user && Auth::id() == $id){
            return view('user.joblist')->with (['jobs' => job::where('user_id', $id)->get()]);
        }else {
            return redirect()->back();
        }
    }
}
