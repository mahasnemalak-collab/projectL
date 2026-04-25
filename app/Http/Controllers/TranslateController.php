<?php

namespace App\Http\Controllers;
use App\Models\Translate;
use App\Models\Translatedegree;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TranslateController extends Controller
{
    public function show()
    {
        return view('translation.translation',['translates'=>translate::All()]);
    }

    

    public function showkids()
    {
        return view('translation.Translation_kids');
    }

    public function kids()
    {
         if((int)request('is_correct')==1){
           $user  = Translatedegree::where('email', Session::get('email'))->first();
           if($user){
            $user->Translation_kids = 1;
            $user->save();
             Session::put('trans1','you complete 1 true ');
             return redirect()->back();
           }else {
               Translatedegree::create([
                 'email' => Session::get('email'),
                 'Translation_kids' => 1,
                 'Translation_intermidate' =>NULL,
                 'Translation_expert' => NULL
               ]);
               Session::put('trans1','you complete 1 true ');
             return redirect()->back();
           }
        }else{

           $user  = Translatedegree::where('email', Session::get('email'))->first();
           if($user){
            $user->Translation_kids = 0;
            $user->save();
             Session::put('trans1','faild ');
             return redirect()->back();
           }else {
               Translatedegree::create([
                 'email' => Session::get('email'),
                 'Translation_kids' => 0,
                 'Translation_intermidate' =>NULL,
                 'Translation_expert' => NULL
               ]);
               Session::put('trans1','faild ');
             return redirect()->back();
           }

        }
    }

     public function showinter()
    {
        return view('translation.Translation_intermidate');
    }

     public function inter()
    {
         if((int)request('is_correct')==1){
           $user  = Translatedegree::where('email', Session::get('email'))->first();
           if($user){
            $user->Translation_intermidate = 1;
            $user->save();
             Session::put('transtwo','you complete 1 true ');
             return redirect()->back();
           }else {
               Translatedegree::create([
                 'email' => Session::get('email'),
                 'Translation_kids' => NULL,
                 'Translation_intermidate' =>1,
                 'Translation_expert' => NULL
               ]);
               Session::put('transtwo','you complete 1 true ');
             return redirect()->back();
           }
        }else{

           $user  = Translatedegree::where('email', Session::get('email'))->first();
           if($user){
            $user->Translation_intermidate = 0;
            $user->save();
             Session::put('transtwo','faild ');
             return redirect()->back();
           }else {
               Translatedegree::create([
                 'email' => Session::get('email'),
                 'Translation_kids' => NULL,
                 'Translation_intermidate' =>0,
                 'Translation_expert' => NULL
               ]);
               Session::put('transtwo','faild ');
             return redirect()->back();
           }

        }
    }

    public function showexpert()
    {
        return view('translation.Translation_expert');
    }

    public function expert()
    {
         if((int)request('is_correct')==1){
           $user  = Translatedegree::where('email', Session::get('email'))->first();
           if($user){
            $user->Translation_expert = 1;
            $user->save();
             Session::put('transthree','you complete 1 true ');
             return redirect()->back();
           }else {
               Translatedegree::create([
                 'email' => Session::get('email'),
                 'Translation_kids' => NULL,
                 'Translation_intermidate' =>NULL,
                 'Translation_expert' => 1
               ]);
               Session::put('transthree','you complete 1 true ');
             return redirect()->back();
           }
        }else{

           $user  = Translatedegree::where('email', Session::get('email'))->first();
           if($user){
            $user->Translation_expert = 0;
            $user->save();
             Session::put('transthree','faild ');
             return redirect()->back();
           }else {
               Translatedegree::create([
                 'email' => Session::get('email'),
                 'Translation_kids' => NULL,
                 'Translation_intermidate' =>NULL,
                 'Translation_expert' => 0
               ]);
               Session::put('transthree','faild ');
             return redirect()->back();
           }

        }
    }

}
