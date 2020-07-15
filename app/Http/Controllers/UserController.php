<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserUpdate;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $user = Auth::user();
        return view('users.show', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdate $request, User $user)
    {

        // dd($request->all());
        $user->name = $request->name;
        $user->birthday = $request->birthday;
        $user->gender = $request->gender !== "null" ? boolval($request->gender) : null ;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->facebook = $request->facebook;

        $user->save();

        return redirect('/')->with('success', 'Successfully updated your profile');
    }

}
