<?php

namespace App\Http\Controllers;
use App\Models\Paarent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class PaarentController extends Controller
{
     public function show()
    {
        return view('parent.parentlogin');
    }

    public function store()
    {
        request()->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255',
        'password' => 'required|string|max:8|confirmed',
         ]);

    // Create a new user instance
       paarent::create([
        'emailchild' => request('emailchild'),
        'number' => request('number'),
        'name'=> request('name'),
        'email'=>request('email'),
        'password'=>Hash::make(request('password'))
       ]);

    Session::put('email',request('email'));
    Session::put('childemail', request('emailchild'));
    return view('parent.dashboard');
    }

      public function show2()
    {
        return view('parent.parentsign');
    }

    public function signin()
    {
        $parent = paarent::where('email', request('email'))->first();

         if (Hash::check(request('password'), $parent->password)) {
            Session::put('email', request('email'));
            Session::put('childemail', request('emailchild'));
            return view('parent.dashboard'); // example redirect
        }
    }

       public function logout()
    {
        Session::flush();
        return redirect('/')->with('success', 'User registered successfully!');
    }

    

}
