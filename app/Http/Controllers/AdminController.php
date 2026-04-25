<?php

namespace App\Http\Controllers;
use App\Models\Test;
use App\Models\User;
use App\Models\age;
use App\Models\Rate;
use App\Models\Contact;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function logout()
    {
        Session::flush();
        return redirect('/')->with('success', 'User registered successfully!');
    }

    public function addtestshow()
    {
        return view('admin.addtest');
    }

    public function addtest(Request $request)
    {
         $imagePath = null;

        if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = request('type') . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('img'), $imageName);
                $imagePath = 'img/' . $imageName;
        }
          Test::create([
            'type' => request('type'),
            'dis' => request('dis'),
            'age_available' => request('age')
          ]);

        return redirect()->back();
    }

    public function involvedshow()
    {
        return view('admin.involved',['users'=>user::All(),'ages' =>age::All()]);
    }

    public function replayshow()
    {
       return view('contact.showmessage',['contacts'=>contact::All()]);
    }

    public function replay()
    {     
        $message = contact::where('id',(int)request('id'))->first();
        $message->response = request('replay');
        $message->checkresponse = 'yes';
        $message->save();
        return redirect()->back();
    }

    public function showrates()
    {
        return view('rate.adminrate',['rates'=>rate::all()]);
    }

      public function new()
    {
        $rates = Rate::orderBy('created_at', 'desc')->get();
        return view('rate.adminrate',['rates'=>$rates]);
    }

    public function mostlike()
    {
        $rates = Rate::orderBy('like', 'desc')->get();
        return view('rate.adminrate',['rates'=>$rates]);
    }

    public function mostdislike()
    {
        $rates = Rate::orderBy('dislike', 'desc')->get();
        return view('rate.adminrate',['rates'=>$rates]);
    }

    public function ourcourses()
    {
       return view('admin.ourcourses',['courses'=>test::All()]);
    }

    public function edit()
    {
       $course = test::where('id',(int)request('id'))->first(); 
       $course->dis = request('dis');
       $course->save();
       return redirect()->back();
    }

    public function delete()
    {
       $course = test::where('id',(int)request('id'))->first(); 
       $course->delete();
     
       return redirect()->back();
    }

    public function search()
    {
        $course = test::where('type',request('name'))->first(); 
        return view('admin.ourcourses',['courses'=>$course]);
    }
}
