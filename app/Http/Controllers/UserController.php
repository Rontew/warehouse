<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;
use App\User;

class UserController extends Controller {


	public function __construct()
    {
    $this->middleware('auth');
    }
    /**
     * Show the profile for the given user.
     */
    public function index()
    {
    	$users = User::all();

        return view('user.index')->with('user', $users);
    }



    public function show($id)
    {
        $users = User::find($id);

        return view('user.show')->with('user', $users);
    }

       /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $users = User::find($id);

       return view('user.edit')->with('user', $users);
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
        $users = User::find($id);

        $users->name = $request->name;
        $users->email = $request->email;


        $users->save();

        return redirect()->route('user.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);

        return redirect()->route('user.index');
    }

}