<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EnrollmentsController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


   Route::get('/', function () {
       return view('welcome');
   })->name("welcome");

   Route::get('/about', function () {
       return view('about');
   })->name("about");

   Route::get('/course',function(){
      return view('course');
   })->name("course");

   Route::get('/category/details/{id}',[CategoryController::class,'details'])->name("category.details");
   Route::get('/course/lessonvideos/{id}',[CourseController::class,'showlesson'])->name("course.lesson");
   Route::get('/enrollment/delete/{id}', [EnrollmentsController::class,'delete'])->name('erollment.delete');
   
   Route::get('/dashboard', function () {
       return view('dashboard');
   })->middleware(['auth', 'verified'])->name('dashboard');
   
   Route::middleware('auth')->group(function () {
       Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
       Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
       Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
   });
   
   require __DIR__.'/auth.php';
   
   Auth::routes();    // here is all the logout and login and regiester links
   
   Route::get('/course',[CategoryController::class,'getdatatouser'])->name('course');

       Route::middleware('auth')->group(function(){
         Route::get('/checkout/{category_id}', [EnrollmentsController::class,'showCheckout'])->name('checkout.page');
         Route::post('/process/payment',[EnrollmentsController::class,'processPayment'])->name('process.payment');
       });
   
      Route::group(["middleware"=>"CheckAdmin"],function(){

          Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    
                    // user Routes          
          Route::get('/user/delete/{id}',[UserController::class,'delete'])->name("user.delete");
          Route::get('/user/edit/{id}',[UserController::class,'edit'])->name("user.edit");
          Route::post('/user/update',[UserController::class,'update'])->name("user.update");
          Route::get('/user/create',[UserController::class,'create'])->name("user.create");
          Route::post('/user/store',[UserController::class,'store'])->name("user.store");
          
                 //categories Routes
          Route::get('/category/show/{id}',[CategoryController::class,'show'])->name("category.show");
          Route::get('/category/delete/{id}',[CategoryController::class,'delete'])->name("category.delete");
          Route::get('/category/create',[CategoryController::class,'create'])->name("category.create");
          Route::post('/category/store',[CategoryController::class,'store'])->name("category.store");
          Route::get('/category/edit/{id}',[CategoryController::class,'edit'])->name("category.edit");
          Route::post('/category/update',[CategoryController::class,'update'])->name("category.update");

                //courses Routes
          Route::get('/course/show/{id}',[CourseController::class,'show'])->name("course.show");      
          Route::get('/course/delete/{id}',[CourseController::class,'delete'])->name("course.delete");      
          Route::get('/course/create',[CourseController::class,'create'])->name("course.create");
          Route::post('/course/store',[CourseController::class,'store'])->name("course.store");
          Route::get('/course/edit{id}',[CourseController::class,'edit'])->name("course.edit");
          Route::post('/course/update',[CourseController::class,'update'])->name("course.update");

                //lessons Routes
          Route::get('/lesson/delete/{id}',[LessonController::class,'delete'])->name("lesson.delete");       
          Route::get('/lesson/show/{id}',[LessonController::class,'show'])->name("lesson.show");       
          Route::get('/lesson/create',[LessonController::class,'create'])->name("lesson.create");
          Route::post('/lesson/store',[LessonController::class,'store'])->name("lesson.store");
          Route::get('/lesson/edit/{id}',[LessonController::class,'edit'])->name('lesson.edit');
          Route::post('/lesson/update',[LessonController::class,'update'])->name("lesson.update");
      });
      
      
      
      
   