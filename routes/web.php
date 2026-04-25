<?php
use App\Models\User;
use App\Models\Service;
use App\Models\Degree;
use App\Models\Gamesdeg;
use App\Models\Games;
use App\Models\Admin;
use App\Models\Image;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GamesController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ScienceController;
use App\Http\Controllers\SpeakingController;
use App\Http\Controllers\TranslateController;
use App\Http\Controllers\PaarentController;
use App\Http\Controllers\RateController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\ValidationException;
use App\Models\Sciencedegree;
use App\Models\Speakingdegree;
use App\Models\age;
//show service
Route::get('/', function () {
    $s = service::all();
     $image = image::where('email',Session::get('email'))->first();
    return view('home',['services'=>$s,'image'=>$image]);
});

//parent
Route::get('/parent',[PaarentController::class,'show']);
Route::post('/parent/login',[PaarentController::class,'store']);
Route::get('/parent/signinshow',[PaarentController::class,'show2']);
Route::post('/parent/signin',[PaarentController::class,'signin']);
Route::get('/parent/logout',[PaarentController::class,'logout']);
Route::get('/parent/marks',[PaarentController::class,'marks']);

Route::get('/test/Games',[GamesController::class,'show']);
//guess
Route::get('/test/games/guess_the_sample',[GamesController::class,'showguess']);
Route::post('/test/games/g1',[GamesController::class,'g1']);
Route::post('/test/games/g2',[GamesController::class,'g2']);
Route::post('/test/games/g3',[GamesController::class,'g3']);
//series
Route::get('/test/games/series_numbers',[GamesController::class,'showseries']);
Route::post('/test/games/s1',[GamesController::class,'s1']);
//discreate
Route::get('/test/games/discrate_words',[GamesController::class,'showdiscrate']);
Route::post('/test/games/discratepost',[GamesController::class,'discrate']);

//country
Route::get('/test/games/guess_the_country',[GamesController::class,'showcountry']);
Route::post('/test/games/countrypost',[GamesController::class,'postcountry']);

//hiding images
Route::get('/test/games/hiding_img',[GamesController::class,'showhiding']);
Route::post('/test/games/hidingpost',[GamesController::class,'hidingpost']);

//science

Route::get('/test/Science',[ScienceController::class,'show']);

//science body parts
Route::get('/test/Science/body_parts',[ScienceController::class,'showbody_parts']);
Route::post('/test/Science/body_parts/s1',[ScienceController::class,'s1']);
Route::post('/test/Science/body_parts/s2',[ScienceController::class,'s2']);
Route::post('/test/Science/body_parts/s3',[ScienceController::class,'s3']);

//science info intro
Route::get('/test/Science/info_inter',[ScienceController::class,'showinfo_inter']);
Route::post('/test/Science/info_inter/i1',[ScienceController::class,'i1']);
Route::post('/test/Science/info_inter/i2',[ScienceController::class,'i2']);
Route::post('/test/Science/info_inter/i3',[ScienceController::class,'i3']);
Route::post('/test/Science/info_inter/i4',[ScienceController::class,'i4']);

//science info_expert
Route::get('/test/Science/info_expert',[ScienceController::class,'showinfo_expert']);
Route::post('/test/Science/info_expert/post',[ScienceController::class,'parts']);

//Chemistry
Route::get('/test/Science/Chemistry',[ScienceController::class,'showChemistry']);
Route::post('/test/Science/Chemistry/post',[ScienceController::class,'Chemistry']);


//Physics
Route::get('/test/Science/Physics',[ScienceController::class,'showPhysics']);
Route::post('/test/Science/Physics/post',[ScienceController::class,'Physics']);

//understanding speaking
Route::get('/test/Understanding-speaking',[SpeakingController::class,'show']);

//speaking kids
Route::get('/test/Understanding-speaking/understanding_kids',[SpeakingController::class,'showkids']);
Route::post('/test/Understanding-speaking/understanding_kids/post',[SpeakingController::class,'kids']);

//speaking intermediate
Route::get('/test/Understanding-speaking/understanding_intermediate',[SpeakingController::class,'showinter']);
Route::post('/test/Understanding-speaking/understanding_intermediate/post',[SpeakingController::class,'inter']);

//speaking expert
Route::get('/test/Understanding-speaking/understanding_expert',[SpeakingController::class,'showexpert']);
Route::post('/test/Understanding-speaking/understanding_expert/post',[SpeakingController::class,'expert']);

//translation
Route::get('/test/translation',[TranslateController::class,'show']);

//translation kids
Route::get('/test/translation/Translation_kids',[TranslateController::class,'showkids']);
Route::post('/test/translation/Translation_kids/post',[TranslateController::class,'kids']);

//translation expert
Route::get('/test/translation/Translation_expert',[TranslateController::class,'showexpert']);
Route::post('/test/translation/Translation_expert/post',[TranslateController::class,'expert']);

//translation intermidiate
Route::get('/test/translation/Translation_intermidate',[TranslateController::class,'showinter']);
Route::post('/test/translation/Translation_intermidate/post',[TranslateController::class,'inter']);

//tests
Route::get('/Tests',[ServiceController::class,'show']);

//result 
Route::get('/show_your_result',[ServiceController::class,'showresult']);
Route::post('/show_your_result/res2',[ServiceController::class,'res2']);
Route::post('/show_your_result/res1',[ServiceController::class,'res1']);
Route::post('/show_your_result/res3',[ServiceController::class,'res3']);

//contact us
Route::get('/Contact_Us',[ServiceController::class,'showcontact']);
Route::post('/Contact_Us/post',[ServiceController::class,'contact']);

//check response
Route::get('/Contact_Us/check',[ServiceController::class,'check']);

//profile
Route::get('/profile',[ServiceController::class,'profile']);
Route::post('/uploadimage',[ServiceController::class,'profileupdate']);
Route::post('/editname',[ServiceController::class,'editname']);
Route::post('/editemail',[ServiceController::class,'editemail']);

//show our users
Route::get('/Similar_users',[ServiceController::class,'similarshow']);
Route::post('/sendSimilar',[ServiceController::class,'send']);

//rate
Route::get('/Rate',[ServiceController::class,'showrate']);
Route::POST('/Rate/like',[RateController::class,'like']);
Route::POST('/Rate/dislike',[RateController::class,'dislike']);
Route::POST('/Rate/rates',[RateController::class,'rate']);
Route::POST('/Rate/new',[RateController::class,'new']);
Route::POST('/Rate/mostlike',[RateController::class,'mostlike']);
Route::POST('/Rate/mostdislike',[RateController::class,'mostdislike']);

//courses
Route::get('/Courses',[CourseController::class,'showcourses']);
Route::get('/Courses/mathematics',[CourseController::class,'showmath']);
Route::get('/Courses/language_low_level',[CourseController::class,'showenglish']);

Route::get('/test/mathematics',[TestController::class,'showmath']);
Route::get('/test/Language',[TestController::class,'showlang']);
Route::get('/test/Clock',[TestController::class,'showclock']);
Route::post('/test/Language/test1',[TestController::class,'lang1']);

Route::post('/test/Clock/c1',[TestController::class,'c1']);
Route::post('/test/Clock/c2',[TestController::class,'c2']);
Route::post('/test/Clock/c3',[TestController::class,'c3']);

Route::post('/test/Language-high-level/high1',[TestController::class,'langhigh1']);
Route::get('/test/Language-high-level',[TestController::class,'showlanghigh']);
Route::get('/test/mathematics/Addition-and-subtraction',[TestController::class,'showaddsub']);
Route::Post('/test/mathematics/add1',[TestController::class,'add1']);
Route::Post('/test/mathematics/sub1',[TestController::class,'sub1']);
Route::Post('/test/mathematics/sum2',[TestController::class,'sum2']);
Route::Post('/test/mathematics/sub2',[TestController::class,'sub2']);

//admin
Route::get('/adminlogout',[AdminController::class,'logout']);

//admin add a test 
Route::get('/addtest',[AdminController::class,'addtestshow']);
Route::post('/addtest',[AdminController::class,'addtest']);

// admin show user involved 
Route::get('/involved',[AdminController::class,'involvedshow']);

//admin show messages 
Route::get('/Replayadmin',[AdminController::class,'replayshow']);
Route::POST('/Replayadmin',[AdminController::class,'replay']);



// admin shows users rates 
Route::get('/showrates',[AdminController::class,'showrates']);
Route::POST('/showrates/new',[AdminController::class,'new']);
Route::POST('/showrates/mostlike',[AdminController::class,'mostlike']);
Route::POST('/showrates/mostdislike',[AdminController::class,'mostdislike']);

//show our courses 
Route::get('/addtest/showcourses',[AdminController::class,'ourcourses']);
Route::POST('/addtest/edit',[AdminController::class,'edit']);
Route::POST('/addtest/delete',[AdminController::class,'delete']);
Route::POST('/addtest/search',[AdminController::class,'search']);

Route::get('/x', function () {
    return view('x');
});
Route::get('/login', function () {
    return view('login');
});
Route::post('/login', function () {
    request()->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255',
        'password' => 'required|string|max:8|confirmed',
    ]);

    // Create a new user instance
    $user= user::create([
        'name'=> request('name'),
        'email'=>request('email'),
        'password'=>Hash::make(request('password'))
       ]);
     Degree::create([
        'email' => request('email'),
        'mathematics' => null,
        'Clock' => null,
        'Understanding-speaking' => null,
        'Language' => null,
        'Science' => null,
        'Games' => null
    ]);
    Gamesdeg::create([
        'email' => request('email'),
        'guess_the_sample' => 0,
        'series_numbers' => 0,
        'hiding_img' => 0,
        'discrate_words' => 0,
        'guess_the_country' => 0
    ]);
    Sciencedegree::create([
        'email' => request('email'),
        'body_parts' => 0,
        'info_inter' => 0,
        'info_expert' => 0,
        'physics' => 0,
        'chemistry' => 0
    ]);
    Speakingdegree::create([
        'email' => request('email'),
        'understanding_kids' => 0,
        'understanding_intermediate' => 0,
        'understanding_expert' => 0
    ]);



    $age = user::where('email',request('email'))->first();
    age::create([
        'key'=> $age->id,
        'age'=>request('age')
    ]);
    
    Auth::login($user);
    Session::put('email',request('email'));
    Session::put('age',request('age'));
    return redirect('/')->with('success', 'User registered successfully!');


});
Route::get('/signout', function () {
    Session::flush();
    Auth::logout();
    return redirect('/')->with('success', 'User registered successfully!');
});
Route::get('/signin', function () {
    return view('signin');

});
Route::post('/signin', function () {
    $log =request()->validate([
        'email' => 'required|string|email',
        'password' => 'required|string',
    ]);

    if(!Auth::attempt($log)){

         $admin = Admin::where('email', $log['email'])->first();

        if ($admin->password == request('password')) {
           Session::put('email',request('email'));
            return view('admin.admin'); // example redirect
        }
        throw ValidationException::withMessages([
           'email' =>'sorry',
           'password'=>'sorry'
        ]);
    };

    $user = user::where('email',request('email'))->first();
    $age = age::where('key',$user->id)->first();

    request()->session()->regenerate();
    Session::put('email',request('email'));
    Session::put('age',$age->age);
    return redirect('/')->with('success', 'User registered successfully!');

});

