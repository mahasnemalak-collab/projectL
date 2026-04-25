<?php

namespace App\Http\Controllers;
use App\Models\Science;
use App\Models\Sciencedegree;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ScienceController extends Controller
{
    public function show()
    {
        return view('science.science',['science'=>Science::All()]);
    }
    //body_parts
    public function showbody_parts()
    {
        return view('science.body_parts'); 
    }

    public function s1()
    {
     if(request('shape')=="Hand"){
         $email = Session::get('email');
         $currentValue = Sciencedegree::where('email', $email)->value('body_parts');
         if ($currentValue >= 3) {
             Session::put('finishguess1','you complete 3 true ');
             
         }else{
            Sciencedegree::where('email',$email)->increment('body_parts', 1);
         }
         // Store a success message in the session
         if ($currentValue >= 3) {
             Session::put('finishguess1','you complete 3 true ');
             session()->flash('finishguess1', 'You have completed 3!');
             return redirect()->back(); // Adjust 'home' to your actual route name
         } else {
             session()->flash('message11', 'You succeeded test1');
         }
     }else{
         $email = Session::get('email');
         Sciencedegree::where('email', $email)->decrement('body_parts', 1);
         session()->flash('message11', 'You failed test1');
     }
     return redirect()->back();
    }
 
    public function s2()
    {
     if(request('shape')=="feet"){
         $email = Session::get('email');
         $currentValue = Sciencedegree::where('email', $email)->value('body_parts');
         if ($currentValue >= 3) {
             Session::put('finishguess1','you complete 3 true ');
             
         }else{
            Sciencedegree::where('email',$email)->increment('body_parts', 1);
         }
         // Store a success message in the session
         if ($currentValue >= 3) {
             Session::put('finishguess1','you complete 3 true ');
             session()->flash('finishguess1', 'You have completed 3!');
             return redirect()->back(); // Adjust 'home' to your actual route name
         } else {
             session()->flash('message22', 'You succeeded test1');
         }
     }else{
         $email = Session::get('email');
         Sciencedegree::where('email', $email)->decrement('body_parts', 1);
         session()->flash('message22', 'You failed test1');
     }
     return redirect()->back();
    }
 
    public function s3()
    {
     if(request('shape')=="skin"){
         $email = Session::get('email');
         $currentValue = Sciencedegree::where('email', $email)->value('body_parts');
         if ($currentValue >= 3) {
             Session::put('finishguess1','you complete 3 true ');
             
         }else{
            Sciencedegree::where('email',$email)->increment('body_parts', 1);
         }
         // Store a success message in the session
         if ($currentValue >= 3) {
             Session::put('finishguess1','you complete 3 true ');
             session()->flash('finishguess1', 'You have completed 3!');
             return redirect()->back(); // Adjust 'home' to your actual route name
         } else {
             session()->flash('message33', 'You succeeded test1');
         }
     }else{
         $email = Session::get('email');
         Sciencedegree::where('email', $email)->decrement('body_parts', 1);
         session()->flash('message33', 'You failed test1');
     }
     return redirect()->back();
    }

    public function showinfo_inter()
    {
        return view('science.info_inter'); 
    }

    public function i1()
    {
     if(request('shape')=="a1"){
         $email = Session::get('email');
         $currentValue = Sciencedegree::where('email', $email)->value('info_inter');
         if ($currentValue >= 4) {
             Session::put('finishguess1','you complete 4 true ');
             
         }else{
            Sciencedegree::where('email',$email)->increment('info_inter', 1);
         }
         // Store a success message in the session
         if ($currentValue >= 3) {
             Session::put('finishguess1','you complete 4 true ');
             session()->flash('finishguess1', 'You have completed 3!');
             return redirect()->back(); // Adjust 'home' to your actual route name
         } else {
             session()->flash('message111', 'You succeeded test1');
         }
     }else{
         $email = Session::get('email');
         Sciencedegree::where('email', $email)->decrement('info_inter', 1);
         session()->flash('message111', 'You failed test1');
     }
     return redirect()->back();
    }

    public function i2()
    {
     if(request('shape')=="a2"){
         $email = Session::get('email');
         $currentValue = Sciencedegree::where('email', $email)->value('info_inter');
         if ($currentValue >= 4) {
             Session::put('finishguess1','you complete 4 true ');
             
         }else{
            Sciencedegree::where('email',$email)->increment('info_inter', 1);
         }
         // Store a success message in the session
         if ($currentValue >= 3) {
             Session::put('finishguess1','you complete 3 true ');
             session()->flash('finishguess1', 'You have completed 3!');
             return redirect()->back(); // Adjust 'home' to your actual route name
         } else {
             session()->flash('message222', 'You succeeded test1');
         }
     }else{
         $email = Session::get('email');
         Sciencedegree::where('email', $email)->decrement('info_inter', 1);
         session()->flash('message222', 'You failed test1');
     }
     return redirect()->back();
    }
    public function i3()
    {
     if(request('shape')=="a1"){
         $email = Session::get('email');
         $currentValue = Sciencedegree::where('email', $email)->value('info_inter');
         if ($currentValue >= 4) {
             Session::put('finishguess1','you complete 4 true ');
             
         }else{
            Sciencedegree::where('email',$email)->increment('info_inter', 1);
         }
         // Store a success message in the session
         if ($currentValue >= 3) {
             Session::put('finishguess1','you complete 3 true ');
             session()->flash('finishguess1', 'You have completed 3!');
             return redirect()->back(); // Adjust 'home' to your actual route name
         } else {
             session()->flash('message333', 'You succeeded test1');
         }
     }else{
         $email = Session::get('email');
         Sciencedegree::where('email', $email)->decrement('info_inter', 1);
         session()->flash('message333', 'You failed test1');
     }
     return redirect()->back();
    }
    public function i4()
    {
     if(request('shape')=="a2"){
         $email = Session::get('email');
         $currentValue = Sciencedegree::where('email', $email)->value('info_inter');
         if ($currentValue >= 4) {
             Session::put('finishguess1','you complete 4 true ');
             
         }else{
            Sciencedegree::where('email',$email)->increment('info_inter', 1);
         }
         // Store a success message in the session
         if ($currentValue >= 3) {
             Session::put('finishguess1','you complete 3 true ');
             session()->flash('finishguess1', 'You have completed 3!');
             return redirect()->back(); // Adjust 'home' to your actual route name
         } else {
             session()->flash('message444', 'You succeeded test1');
         }
     }else{
         $email = Session::get('email');
         Sciencedegree::where('email', $email)->decrement('info_inter', 1);
         session()->flash('message444', 'You failed test1');
     }
     return redirect()->back();
    }

    public function showinfo_expert()
    {
        return view('science.info_expert'); 
    }

    public function parts()
    {
        if(request('option1')=='1' &&request('option2')=='2'
         &&request('option3')=='3' &&request('option4')=='3'
          &&request('option5')=='1' &&request('option6')=='1'
           &&request('option7')=='1' &&request('option8')=='3' ){
            $email = Session::get('email');
            $currentValue = Sciencedegree::where('email', $email)->value('info_expert');
            if ($currentValue >= 1) {
                Session::put('finishguess1','you complete 4 true ');
                
            }else{
               Sciencedegree::where('email',$email)->increment('info_expert', 1);
               session()->flash('message123', 'You succeeded test1');
            }
            // Store a success message in the session
         
            }else{
                $email = Session::get('email');
                Sciencedegree::where('email', $email)->decrement('info_expert', 1);
                session()->flash('message123', 'You failed test1');
            }
            return redirect()->back();
    }

    public function showPhysics()
    {
        return view('science.Physics');
    }

    public function Physics()
    {
        if(request('option1')=='3' &&request('option2')=='2'
         &&request('option3')=='1' &&request('option4')=='3'
          ){
            $email = Session::get('email');
            $currentValue = Sciencedegree::where('email', $email)->value('Physics');
            if ($currentValue >= 1) {
                Session::put('finishguess1','you complete 4 true ');
                
            }else{
               Sciencedegree::where('email',$email)->increment('Physics', 1);
               session()->flash('message321', 'You succeeded test1');
            }
            // Store a success message in the session
         
            }else{
                $email = Session::get('email');
                Sciencedegree::where('email', $email)->decrement('Physics', 1);
                session()->flash('message321', 'You failed test1');
            }
            return redirect()->back();
    }

    public function showChemistry()
    {
        return view('science.Chemistry');
    }

    public function Chemistry()
    {
        if(request('option1')=='3' &&request('option2')=='1'
         &&request('option3')=='2' &&request('option4')=='2'
          ){
            $email = Session::get('email');
            $currentValue = Sciencedegree::where('email', $email)->value('Chemistry');
            if ($currentValue >= 1) {
                Session::put('finishguess1','you complete 4 true ');
                
            }else{
               Sciencedegree::where('email',$email)->increment('Chemistry', 1);
               session()->flash('message321', 'You succeeded test1');
            }
            // Store a success message in the session
         
            }else{
                $email = Session::get('email');
                Sciencedegree::where('email', $email)->decrement('Chemistry', 1);
                session()->flash('message321', 'You failed test1');
            }
            return redirect()->back();
    }
}
