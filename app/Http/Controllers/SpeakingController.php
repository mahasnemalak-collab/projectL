<?php

namespace App\Http\Controllers;
use App\Models\Speaking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Speakingdegree;

class SpeakingController extends Controller
{
    public function show()
    {
        return view('speaking.speaking',['speaks'=>speaking::ALL()]);
    }

    public function showkids()
    {
        return view('speaking.understanding_kids');
    }

    public function kids()
    {
        if(request('option1')=='2'  ){
           $email = Session::get('email');
           $currentValue = Speakingdegree::where('email', $email)->value('understanding_kids');
           if ($currentValue >= 1) {
               Session::put('finishguess1','you complete 4 true ');
               
           }else{
            Speakingdegree::where('email',$email)->increment('understanding_kids', 1);
              session()->flash('messagek', 'You succeeded test1');
           }
           // Store a success message in the session
        
           }else{
               $email = Session::get('email');
               Speakingdegree::where('email', $email)->decrement('understanding_kids', 1);
               session()->flash('messagek', 'You failed test1');
           }
           return redirect()->back();
    }

    public function showinter()
    {
        return view('speaking.understanding_intermediate');
    }

    public function inter()
    {
        if(request('option1')=='4'  ){
            $email = Session::get('email');
            $currentValue = Speakingdegree::where('email', $email)->value('understanding_intermediate');
            if ($currentValue >= 1) {
                Session::put('finishguess1','you complete 4 true ');
                
            }else{
             Speakingdegree::where('email',$email)->increment('understanding_intermediate', 1);
               session()->flash('messagekl', 'You succeeded test1');
            }
            // Store a success message in the session
         
            }else{
                $email = Session::get('email');
                Speakingdegree::where('email', $email)->decrement('understanding_intermediate', 1);
                session()->flash('messagekl', 'You failed test1');
            }
            return redirect()->back();
    }

    public function showexpert()
    {
        return view('speaking.understanding_expert');
    }

    public function expert()
    {
        if(request('option1')=='after i went to the gym i visited my grandma'  ){
            $email = Session::get('email');
            $currentValue = Speakingdegree::where('email', $email)->value('understanding_expert');
            if ($currentValue >= 1) {
                Session::put('finishguess1','you complete 4 true ');
                
            }else{
             Speakingdegree::where('email',$email)->increment('understanding_expert', 1);
               session()->flash('messageklk', 'You succeeded test1');
            }
            // Store a success message in the session
         
            }else{
                $email = Session::get('email');
                Speakingdegree::where('email', $email)->decrement('understanding_expert', 1);
                session()->flash('messageklk', 'You failed test1');
            }
            return redirect()->back();
    }
}
