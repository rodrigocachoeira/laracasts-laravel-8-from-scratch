<?php

namespace App\Http\Controllers;

class SessionController extends Controller
{

    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if(auth()->attempt($attributes)) {
            session()->regenerate();
            return redirect('/')->with('success', 'welcome Back!');
        }
        return back()
            ->withInput()
            ->withErrors([
                'email' => 'your provided credentials could not be verified.'
            ]);
    }
    
    public function destroy()
    {
        auth()->logout();
        return redirect('/')->with('success', 'Goodbay');
    }

}
