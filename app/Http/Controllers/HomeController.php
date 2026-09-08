<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\Enrollment;
use App\Models\Lesson;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users=User::all();
        $category=Category::all();
        $course=Course::with('category')->get();    //this is the function relation ship that we made in the course model and to prevent the querey problem ((N+1))
        $lesson=Lesson::with('courses')->get();
        $enrollment=Enrollment::with(['user','category'])->get();
        return view('home',["users"=>$users,"categories"=>$category,"courses"=>$course,"lessons"=>$lesson,"enrollments"=>$enrollment]);
    }
}
