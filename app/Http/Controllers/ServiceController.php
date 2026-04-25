<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Models\Test;
use App\Models\degree;
use App\Models\Sciencedegree;
use App\Models\Gamesdeg;
use App\Models\Rate;
use App\Models\Image;
use App\Models\Similar;
use App\Models\User;
use App\Models\Translatedegree;
use App\Models\speakingdegree;
use Illuminate\Support\Facades\Session;
class ServiceController extends Controller
{
   public function show()
   {
    $t = test::all();
    return view('test',['tests'=>$t]);
   }

   public function showresult()
   {
      return view('result',['speaks'=>speakingdegree::ALL(),
                            'games'=>gamesdeg::ALL(),
                            'sciences'=>sciencedegree::ALL(),
                            'degrees'=>degree::ALL(),
                            'translates'=>Translatedegree::ALL()]);
   }

   public function res2()
   {
      if(request('res21')<=0){
         Session::put('color','you have difculties in learining language low level s');
      }
      if(request('res22')<=0 || request('res23')<=0){
         Session::put('games','you have difculties in focusing and attenation  ');
      }
      if(request('res24')<=0 || request('res25')<=0 || request('res26')<=0){
         Session::put('science','you have difculties in learning science  ');
      }
      if(request('res27')<=0 ){
         Session::put('speaking','you have difculties in listing   ');
      }
       if(request('res40')<=0 ){
         Session::put('transs','you have difculties in translating  ');
      }

      
     

      return redirect()->back();
   }

   public function res1()
   {
      if(request('res11')<=0){
         Session::put('language','you have difculties in learining language low level ');
      }
      if(request('res12')<=0 ){
         Session::put('clock','you have difculties in seeing the time  ');
      }
      if(request('res13')<=0 ){
         Session::put('games1','you have difculties in attintion  ');
      }
      if(request('res14')<=0 ){
         Session::put('science','you have difculties in science   ');
      }
      if(request('res15')<=0 ){
         Session::put('speaking1','you have difculties in listing   ');
      }
      if(request('res20')<=0 ){
         Session::put('tran','you have difculties in translating   ');
      }

      return redirect()->back();
   }

   public function res3()
   {
      if(request('res31')<=0){
         Session::put('math','you have difculties in learining math ');
      }
      if(request('res32')<=0 ||request('res33')<=0){
         Session::put('games3','you have difculties in attintion  ');
      }
      if(request('res34')<=0 ){
         Session::put('science3','you have difculties in science  ');
      }
      if(request('res35')<=0 ){
         Session::put('speaking3','you have difculties in speaking   ');
      }
      if(request('res36')<=0 ){
         Session::put('transexpert','you have difculties in translate   ');
      }

      return redirect()->back();
   }
  
   //contact

   public function showcontact()
   {
      return view('contact.contactus');
   }

   public function contact(Request $request)
   {
      Contact::create([
            'name'    => $request->name,
            'email'   => $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        ]);

        return redirect()->back();
   }

   public function check()
   {
       return view('contact.check',['contacts'=>contact::ALL()]);
   }

   //rates

   public function showrate()
   {
      return view('rate.rates',['rates'=>rate::ALL()]);
   }

   public function profile()
   {
      $image = image::where('email',Session::get('email'))->first();
      $User = user::where('email',Session::get('email'))->first();
      return view('profile.profile',['image'=>$image,'user'=>$User]);
   }

   public function profileupdate(Request $request)
   {
      // Validate file
        $request->validate([
            'profileImage' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        // Get file extension
        $extension = $request->file('profileImage')->getClientOriginalExtension();

        // Generate new name based on current timestamp
        $fileName = time() . '.' . $extension;

        // Save file in public/images folder
        $path = $request->file('profileImage')->storeAs('img', $fileName, 'public');

        // Save filename into DB
        $images = image::where('email',Session::get('email'))->first();
        if($images){
         $images->name=  $fileName;
         $images->save();

        }else{
         $image = Image::create([
               'email'=>Session::get('email'),
               'name' => $fileName,
         ]);
        }

        return back()->with('success', 'Profile image uploaded successfully!');
   }

   public function editname()
   {
      $User = user::where('email',Session::get('email'))->first();
      $User->name = request('name');
      $User->save();
      return redirect()->back();
   }

   public function editemail()
   {
      $User = user::where('email',Session::get('email'))->first();
      $User->email = request('email');
      Session::put('email',request('email'));
      $User->save();
      return redirect()->back();
   }

   public function similarshow()
   {
      $userd = degree::where('email',Session::get('email'))->first();
      
      return view('similar.similar',['degrees'=>degree::all(),'user'=>$userd]);
   }

   public function send()
   {
      
      similar::create([
             'emailone'=>Session::get('email'),
             'emailtwo'=>request('email'),
             'message'=>request('replay')
      ]);

      return redirect()->back();
   }
  
}
