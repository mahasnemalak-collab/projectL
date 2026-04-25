<?php

namespace App\Http\Controllers;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function showcourses()
    {
       return view('courses',['courses'=>Course::ALL()]);
    }

    public function showmath()
    {
        return view('course.math');
    }
    public function showenglish()
    {
        return view('course.english');
    }
}
