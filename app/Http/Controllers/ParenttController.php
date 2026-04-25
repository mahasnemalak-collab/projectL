<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParenttController extends Controller
{
    public function show()
    {
        return view('parent.parentlogin');
    }
}
