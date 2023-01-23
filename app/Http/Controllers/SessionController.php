<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    //

    public function create()
    {
        return view('session.create');
    }

    public function store()
    {
        $attribues= request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(! auth()->attempt($attribues)){
            throw ValidationException::withMessages([
                'email' => 'Your provided credential could not be verified'
            ]);
        }
        
        session()->regenerate();
        return redirect('/')->with('success', 'Welcome Back');
        // return back()
        // ->withInput()
        // ->withErrors(['email' => 'Your provided credential could not be verified']);
    }
    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('success', 'Goodbye!');
    }
}
