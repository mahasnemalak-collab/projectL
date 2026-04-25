<?php

namespace App\Http\Controllers;
use App\Models\Math;
use App\Models\Degree;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function showmath()
    {
        $m = math::all();
        return view('mathematics',['maths'=>$m]);
  
    }
    

    public function showaddsub()
    {
        
        return view('Additionandsubtraction');
  
    }

    public function showlang()
    {
        
        return view('Language');
  
    }

    
    public function showlanghigh()
    {
        
        return view('Language-high-level');
  
    }

    public function showclock()
    {
        
        return view('clock');
  
    }

    public function add1()
    {
        
        if(request('add1')===request('sum')){
            
            $email = Session::get('email');
            $currentValue = degree::where('email', $email)->value('mathematics');

            if ($currentValue >= 4) {
                Session::put('finishmath1','you complete 4 true ');
            }else{
            degree::where('email',$email)->increment('mathematics', 1);
            }
            // Store a success message in the session
            if ($currentValue >= 4) {
                Session::put('finishmath1','you complete 4 true ');
                session()->flash('message', 'You have completed 4!');
                return redirect()->back(); // Adjust 'home' to your actual route name
            } else {
                session()->flash('message', 'You succeeded test1');
            }
        }else{
            $email = Session::get('email');
            degree::where('email', $email)->decrement('mathematics', 1);
            session()->flash('message', 'You failed test1');
        }
        return redirect()->back();
    }

    public function sub1()
    {
        
        if(request('sub1')===request('sub')){
            $email = Session::get('email');
            $currentValue = degree::where('email', $email)->value('mathematics');
            if ($currentValue >= 4) {
                Session::put('finishmath1','you complete 4 true ');
            }else{
            degree::where('email',$email)->increment('mathematics', 1);
            }
            // Store a success message in the session
            if ($currentValue >= 4) {
                Session::put('finishmath1','you complete 4 true ');
                session()->flash('message1', 'You have completed 4!');
                return redirect()->back(); // Adjust 'home' to your actual route name
            } else {
                session()->flash('message1', 'You succeeded test1');
            }
        }else{
            $email = Session::get('email');
            degree::where('email', $email)->decrement('mathematics', 1);
            session()->flash('message1', 'You failed test1');
        }
        return redirect()->back();
    }

    public function sum2()
    {
        
        if(request('sum22')===request('sum2')){
            $email = Session::get('email');
            $currentValue = degree::where('email', $email)->value('mathematics');
            if ($currentValue >= 4) {
                Session::put('finishmath1','you complete 4 true ');
            }else{
            degree::where('email',$email)->increment('mathematics', 1);
            }
            // Store a success message in the session
            if ($currentValue >= 4) {
                Session::put('finishmath1','you complete 4 true ');
                session()->flash('message2', 'You have completed 4!');
                return redirect()->back(); // Adjust 'home' to your actual route name
            } else {
                session()->flash('message2', 'You succeeded test1');
            }
        }else{
            $email = Session::get('email');
            degree::where('email', $email)->decrement('mathematics', 1);
            session()->flash('message2', 'You failed test1');
        }
        return redirect()->back();
    }

    public function sub2()
    {
        
        if(request('sub22')===request('sub2')){
            $email = Session::get('email');
            $currentValue = degree::where('email', $email)->value('mathematics');
            if ($currentValue >= 4) {
                Session::put('finishmath1','you complete 4 true ');
            }else{
            degree::where('email',$email)->increment('mathematics', 1);
            }
            // Store a success message in the session
            if ($currentValue >= 4) {
                Session::put('finishmath1','you complete 4 true ');
                session()->flash('message3', 'You have completed 4!');
                return redirect()->back(); // Adjust 'home' to your actual route name
            } else {
                session()->flash('message3', 'You succeeded test1');
            }
        }else{
            $email = Session::get('email');
            degree::where('email', $email)->decrement('mathematics', 1);
            session()->flash('message3', 'You failed test1');
        }
        return redirect()->back();
    }

    public function lang1()
    {
       
        if(request('letter')===request('letter2')){
            $email = Session::get('email');
            $currentValue = degree::where('email', $email)->value('Language');
            if ($currentValue >= 8) {
                Session::put('finishmath1','you complete 4 true ');
            }else{
            degree::where('email',$email)->increment('Language', 1);
            }
            // Store a success message in the session
            if ($currentValue >= 8) {
                Session::put('finishmath1','you complete 8 true ');
                session()->flash('message3', 'You have completed 8!');
                return redirect()->back(); // Adjust 'home' to your actual route name
            } else {
                session()->flash('message3', 'You succeeded test1');
            }
        }else{
            $email = Session::get('email');
            degree::where('email', $email)->decrement('Language', 1);
            session()->flash('message3', 'You failed test1');
        }
        return redirect()->back();
    }

    
    public function langhigh1()
    {
        
        if(request('color')===request('color2')){
            $email = Session::get('email');
            $currentValue = degree::where('email', $email)->value('Science');
            if ($currentValue >= 8) {
                
                Session::put('finishmath1','you complete 4 true ');
            }else{
            degree::where('email',$email)->increment('Science', 1);
            }
            // Store a success message in the session
            if ($currentValue >= 8) {
                Session::put('finishmath1','you complete 8 true ');
                session()->flash('message3', 'You have completed 4!');
                return redirect()->back(); // Adjust 'home' to your actual route name
            } else {
                session()->flash('message3', 'You succeeded test1');
            }
        }else{
            $email = Session::get('email');
            degree::where('email', $email)->decrement('Science', 1);
            session()->flash('message3', 'You failed test1');
        }
        return redirect()->back();
    }
   

    public function c1()
    {
        
        if(request('h1')==12){
            if(request('s1')==00){
            $email = Session::get('email');
            $currentValue = degree::where('email', $email)->value('Clock');
            if ($currentValue >= 3) {
                Session::put('finishmath1','you complete 4 true ');
            }else{
            degree::where('email',$email)->increment('Clock', 1);
            }
            // Store a success message in the session
            if ($currentValue >= 3) {
                Session::put('finishmath1','you complete 8 true ');
                session()->flash('message11', 'You have completed 3!');
                return redirect()->back(); // Adjust 'home' to your actual route name
            } else {
                session()->flash('message11', 'You succeeded test1');
            }
        }
        }else{
            $email = Session::get('email');
            degree::where('email', $email)->decrement('Clock', 1);
            session()->flash('message11', 'You failed test1');
        }
        return redirect()->back();
    }
    
    public function c2()
    {
        
        if(request('h2')==11){
            if(request('s2')==20){
            $email = Session::get('email');
            $currentValue = degree::where('email', $email)->value('Clock');
            if ($currentValue >= 3) {
                Session::put('finishmath1','you complete 4 true ');
            }else{
            degree::where('email',$email)->increment('Clock', 1);
            }
            // Store a success message in the session
            if ($currentValue >= 3) {
                Session::put('finishmath1','you complete 8 true ');
                session()->flash('message22', 'You have completed 3!');
                return redirect()->back(); // Adjust 'home' to your actual route name
            } else {
                session()->flash('message22', 'You succeeded test1');
            }
        }
        }else{
            $email = Session::get('email');
            degree::where('email', $email)->decrement('Clock', 1);
            session()->flash('message22', 'You failed test1');
        }
        return redirect()->back();
    }

    public function c3()
    {
        
        if(request('h3')==1){
            if(request('s3')==35){
            $email = Session::get('email');
            $currentValue = degree::where('email', $email)->value('Clock');
            if ($currentValue >= 3) {
                Session::put('finishmath1','you complete 4 true ');
            }else{
            degree::where('email',$email)->increment('Clock', 1);
            }
            // Store a success message in the session
            if ($currentValue >= 3) {
                Session::put('finishmath1','you complete 8 true ');
                session()->flash('message33', 'You have completed 3!');
                return redirect()->back(); // Adjust 'home' to your actual route name
            } else {
                session()->flash('message33', 'You succeeded test1');
            }
        }
        }else{
            $email = Session::get('email');
            degree::where('email', $email)->decrement('Clock', 1);
            session()->flash('message33', 'You failed test1');
        }
        return redirect()->back();
    }

}
