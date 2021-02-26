<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
   /* public function __construct()
    {
        $this->middleware('auth');
    }*/
    public function index($user)
    {
        $user = User::findOrFail($user);

        return view('profiles.index', compact('user'));
    }

    public function edit(\App\User $user) {
        return view('profiles.edit', compact('user'));
    }

    public function update(User $user) {
        $data= \request()->validate([
            'title'=>'required',
            'description'=>'required',
            'url'=>'required|url',
            'image'=>'',
        ]);
       auth()->user()->profile()->update($data);
       return redirect("/profile/{$user->id}");
    }
}
