<?php

namespace App\Http\Controllers;
use App\Models\Rate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RateController extends Controller
{
    public function like()
    {
       $rate = rate::where('id',(int)request('id'))->first();
       $rate->like = $rate->like + 1;
       $rate->save();
       return redirect()->back();
    }

     public function dislike()
    {
       $rate = rate::where('id',(int)request('id'))->first();
       $rate->dislike = $rate->dislike + 1;
       $rate->save();
       return redirect()->back();
    }

    public function rate()
    {
        rate::create([
            'email'=>Session::get('email'),
            'rate'=>request('rate'),
            'stars'=>request('stars')
        ]);
        return redirect()->back();
    }

    public function new()
    {
        $rates = Rate::orderBy('created_at', 'desc')->get();
        return view('rate.rates',['rates'=>$rates]);
    }

    public function mostlike()
    {
        $rates = Rate::orderBy('like', 'desc')->get();
        return view('rate.rates',['rates'=>$rates]);
    }

    public function mostdislike()
    {
        $rates = Rate::orderBy('dislike', 'desc')->get();
        return view('rate.rates',['rates'=>$rates]);
    }


}
