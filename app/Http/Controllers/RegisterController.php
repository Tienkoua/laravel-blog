<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class RegisterController extends Controller
{
    //
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {
        $attributes=request()->validate([
            'name' => 'required|min:4',
            'username' => 'required|min:4|unique:users,username',
            'email' => ['required','email', Rule::unique('users','email')],
            'password' => 'required|min:8'
        ]);

        // $attributes['password'] = bcrypt($attributes['password']);

        $user=User::create($attributes);
        auth()->login($user);

        // session()->flash('success', 'Your account has been created');
        return redirect('/')->with('success', 'Your account has been created');
    }
}
