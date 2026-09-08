<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\Enrollment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Validation\Rule;

class CourseController extends Controller
{
     public function showlesson($id){
        $course=Course::findOrFail($id);
        $hasAccess=Enrollment::where('user_id',auth()->id())->where('category_id',$course->category_id)
        ->where('payment_status','paid')->exists();
        
        if(!$hasAccess){
            return redirect()->route('course')->with('messagepayment','dont be smart');
        }
        $lesson=$course;
        return view('videos',compact('lesson'));
    }
    function show($id){
        $course=Course::findOrFail($id);
        return view("course.show",["result"=>$course]);

    }
    function delete($id){
        $course=Course::findOrFail($id);
        $imagepath=public_path('img/course/'.$course->cour_image);
        if(File::exists($imagepath)){
            File::delete($imagepath);
        }
        $course->delete();
        return redirect()->route('home')->with("message","course deleted successfully");
    }
    function create(){
        $result=Category::where('status','1')->get();

        return view('course.store',compact('result'));
    }
    function store(Request $request){
        $request->validate([
            'category_id'=>['required','integer','exists:categories,id'],
            'id'=>['required','unique:courses','max:255'],
            'cour_image' => ['nullable','mimes:png,jpg','max:2048'],
            'title_en' => ['required','min:3','max:255'],
            'title_ar' => ['required','min:3','max:255'],
            'description_en' => ['required','min:5','max:255'],
            'description_ar' => ['required','min:5','max:255'],
            'price'=>['required','numeric','min:0'],
        ]);
        $imagename="";
        if($request->hasFile("cour_image")){
        $cour_image=$request->cour_image;
        $imagename=rand(1,10000)."_".time().".".$cour_image->extension();
        $cour_image->move(public_path("img/course/"),$imagename);
        }

        Course::create([
        "category_id"=>$request->category_id,
         "id"=>$request->id,
         "cour_image"=>$imagename,
         "title_en"=>$request->title_en,
         "title_ar"=>$request->title_ar,
         "description_en"=>$request->description_en,
         "description_ar"=>$request->description_ar,
         "price"=>$request->price,
     ]);
        return redirect()->route('home')->with("message","course created successfully");
    }
    function edit($id){
        $course=Course::findOrFail($id);
        $category=Category::where('status','1')->get();
        return view('course.edit',["result"=>$course,"categories"=>$category]);
    }
    function update(Request $request){
     $old_id=$request->old_id;
     $course=Course::findOrFail($old_id);
     
     $request->validate([
            'category_id'=>['required','integer','exists:categories,id'],
            'id'=>['required',Rule::unique('courses','id')->ignore($old_id)],
            'cour_image' => ['nullable','mimes:png,jpg','max:2048'],
            'title_en' => ['required','min:3','max:255'],
            'title_ar' => ['required','min:3','max:255'],
            'description_en' => ['required','min:5','max:255'],
            'description_ar' => ['required','min:5','max:255'],    
            'price'=>['required','numeric','min:0'],
            'status'=>['required',Rule::in(['0','1'])],
        ]);

     if($request->hasFile("cour_image")){
        $cour_image=$request->cour_image;
        $imagename=rand(1,10000)."_".time().".".$cour_image->extension();
        $imagepath= public_path('img/course/'.$course->cour_image);
        if(File::exists($imagepath)){
            File::delete($imagepath);
        }
        $cour_image->move(public_path("img/course/"),$imagename);
     }else{
        $imagename=$course->cour_image;
     }
     $course->update([
            "category_id"=>$request->category_id,
            "id"=>$request->id,
            "cour_image"=>$imagename,
            "title_en"=>$request->title_en,
            "title_ar"=>$request->title_ar,
            "description_en"=>$request->description_en,
            "description_ar"=>$request->description_ar,
            "price"=>$request->price,
            "status"=>$request->status
        ]);
        return redirect()->route('home')->with("message","course number[".$old_id."]have been updated");
    }
}
