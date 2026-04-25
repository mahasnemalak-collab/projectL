<?php

namespace App\Http\Controllers;
use App\Models\Games;
use App\Models\Gamesdeg;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;


class GamesController extends Controller
{
   public function show()
   {
    return view('games.gamess',['games'=>games::All()]);
   }
   //geomentic
   public function showguess()
   {
    return view('games.guess');
   }

   public function g1()
   {
    if(request('shape')=="circle"){
        $email = Session::get('email');
        $currentValue = Gamesdeg::where('email', $email)->value('guess_the_sample');
        if ($currentValue >= 3) {
            Session::put('finishguess1','you complete 3 true ');
            
        }else{
            Gamesdeg::where('email',$email)->increment('guess_the_sample', 1);
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
        Gamesdeg::where('email', $email)->decrement('guess_the_sample', 1);
        session()->flash('message11', 'You failed test1');
    }
    return redirect()->back();
   }

   public function g2()
   {
    if(request('shape')=="triangle"){
        $email = Session::get('email');
        $currentValue = Gamesdeg::where('email', $email)->value('guess_the_sample');
        if ($currentValue >= 3) {
            Session::put('finishguess1','you complete 3 true ');
            
        }else{
            Gamesdeg::where('email',$email)->increment('guess_the_sample', 1);
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
        Gamesdeg::where('email', $email)->decrement('guess_the_sample', 1);
        session()->flash('message22', 'You failed test1');
    }
    return redirect()->back();
   }

   public function g3()
   {
    if(request('shape')=="square"){
        $email = Session::get('email');
        $currentValue = Gamesdeg::where('email', $email)->value('guess_the_sample');
        if ($currentValue >= 3) {
            Session::put('finishguess1','you complete 3 true ');
            
        }else{
            Gamesdeg::where('email',$email)->increment('guess_the_sample', 1);
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
        Gamesdeg::where('email', $email)->decrement('guess_the_sample', 1);
        session()->flash('message33', 'You failed test1');
    }
    return redirect()->back();
   }
   //series
   public function showseries()
   {
    return view('games.series');
   }
   
   public function s1(Request $request)
   {
            // Retrieve the selected value from the form submission
    $selectedValue = $request->input('selected_value'); // Use 'selected_value' to match the input name

    // Retrieve the correct answer from the hidden input
    $correctAnswer = $request->input('correct_answer'); // This should be the same as the hidden input value

    // Check if the selected value matches the correct answer
    if ($selectedValue == $correctAnswer) {
        $email = Session::get('email');
        Gamesdeg::where('email', $email)->increment('series_numbers', 1);
        session()->flash('message31', 'You succeeded ');
    } else {
        $email = Session::get('email');
        Gamesdeg::where('email', $email)->decrement('series_numbers', 1);
        session()->flash('message31', 'You failed ');
    }

    // Redirect back to the previous page or a specific route
    return redirect()->back();
   }

   //showdiscrate

   public function showdiscrate()
   {
    
    return view('games.discreate');
   }

   public function discrate()
   { 
    $email = Session::get('email');
    $value = Gamesdeg::where('email', $email)->value('hiding_img');
    $count=0;
    if(request('one')=='p'){
        session()->flash('messageone', 'True ');
        $count =$count+1;
    }else {
        session()->flash('messageone', 'false');
    }

    if(request('two')=='d'){
        session()->flash('messagetwo', 'True ');
        $count =$count+1;
    }else {
        session()->flash('messagetwo', 'false');
    }

    if(request('three')=='m'){
        session()->flash('messagethree', 'True ');
        $count =$count+1;
    }else {
        session()->flash('messagethree', 'false');
    }

    if(request('four')=='l'){
        session()->flash('messagefour', 'True ');
        $count =$count+1;
    }else {
        session()->flash('messagefour', 'false');
    }

    if(request('five')=='a'){
        session()->flash('messagefive', 'True ');
        $count =$count+1;
    }else {
        session()->flash('messagefive', 'false');
    }

    if(request('sex')=='s'){
        session()->flash('messagesex', 'True ');
        $count =$count+1;
    }else {
        session()->flash('messagesex', 'false');
    }

    if(request('seven')=='g'){
        session()->flash('messageseven', 'True ');
        $count =$count+1;
    }else {
        session()->flash('messageseven', 'false');
    }

    if(request('eight')=='o'){
        session()->flash('messageeight', 'True ');
        $count =$count+1;
    }else {
        session()->flash('messageeight', 'false');
    }

    if(request('nine')=='t'){
        session()->flash('messagenine', 'True ');
        $count =$count+1;
    }else {
        session()->flash('messagenine', 'false');
    }

    if($count == 9){
        if($value>=1){
            session()->flash('message100', 'succed ');
            return redirect()->back();
        }else{
            Gamesdeg::where('email', $email)->increment('discrate_words', 1);
            session()->flash('message100', 'succed ');
            return redirect()->back();
        }
       
    }else{
        return redirect()->back();
    }


    

   }

   //country

    public function showcountry()
    {
     return view('games.country');
    }

    public function postcountry()
    {
        $email = Session::get('email');
        $value = Gamesdeg::where('email', $email)->value('guess_the_country');

        if(request('country') == 'uae'){
            if($value >=1){
                session()->flash('message34', 'You succeeded3 ');
                return redirect()->back();

            }else{
            $email = Session::get('email');
            Gamesdeg::where('email', $email)->increment('guess_the_country', 1);
            session()->flash('message34', 'You succeeded ');
            return redirect()->back();

            }
        }else {
            session()->flash('message34', 'You failed ');
            return redirect()->back();

        }
    }

    //hiding

    public function showhiding()
    {
     return view('games.hiding');
    }

    public function hidingpost()
    {
        $email = Session::get('email');
        $value = Gamesdeg::where('email', $email)->value('hiding_img');
        if(request('tree')==='two' && request('cat')=='no' && request('cloud')=="yes" && request('river')=='yes'){
            if($value >=1){
                session()->flash('message35', 'You succeeded3 ');
                return redirect()->back();

            }else{
            $email = Session::get('email');
            Gamesdeg::where('email', $email)->increment('hiding_img', 1);
            session()->flash('message35', 'You succeeded ');
            return redirect()->back();

            }
        }else {
            session()->flash('message35', 'You failed ');
            return redirect()->back();

        }
    }
}
