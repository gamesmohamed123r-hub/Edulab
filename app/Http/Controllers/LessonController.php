<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Validation\Rule;

class LessonController extends Controller
{
    function delete($id){
                $lesson=Lesson::findOrFail($id);
        $videopath=public_path('video/lesson/'.$lesson->video_url);
        if(File::exists($videopath)){
            File::delete($videopath);
        }
        $lesson->delete();
        return redirect()->route('home')->with("message","lesson deleted successfully");
    }
    function show($id){
      $lesson=Lesson::findOrFail($id);
      return view('lesson.show',compact('lesson'));
    }
    function create(){
        $result=Course::where('status','1')->get();
        return view('lesson.store',compact('result'));
    }
    function store(Request $request){
     $request->validate([
      'course_id'      => ['required','integer','exists:courses,id'],
      'id'             =>['required','unique:lessons','max:255'],
      'video_url'          => ['nullable', 'mimes:mp4,mov,ogg,qt', 'max:20480'],
      'title_en'       => ['required','min:3', 'max:255'],
      'title_ar'       => ['required', 'min:3', 'max:255'],
      'description_en' => ['required', 'min:3', 'max:255'],
      'description_ar' => ['required', 'min:3', 'max:255'],
     ]);
      $videoname="";
     if($request->hasFile("video_url")){
        $video=$request->video_url;
        $videoname=rand()."_".time().".".$video->getClientOriginalExtension();
        $video->move(public_path("video/lesson/"),$videoname);        
     }

     Lesson::create([
        'course_id'=>$request->course_id,
        'id'=>$request->id,
        'video_url'=>$videoname,
        'title_en'=>$request->title_en,
        'title_ar'=>$request->title_ar,
        'description_en'=>$request->description_en,
        'description_ar'=>$request->description_ar,   
     ]);

     return redirect()->route('home')->with("message","lesson created succssfully");

    }
    function edit($id){
        $lesson=Lesson::findOrFail($id);
        $course=Course::where('status','1')->get();
        return view('lesson.edit',["result"=>$lesson,"course"=>$course]);
    }
    function update(Request $request){
      $old_id=$request->old_id;
      $lesson=Lesson::findOrFail($old_id);
      
      $request->validate([
             'course_id'=>['required','integer','exists:courses,id'],
             'id'=>['required',Rule::unique('lessons','id')->ignore($old_id)],
             'video_url'=> ['nullable', 'mimes:mp4,mov,ogg,qt', 'max:20480'],
             'title_en' => ['required','min:3','max:255'],
             'title_ar' => ['required','min:3','max:255'],
             'description_en' => ['required','min:5','max:255'],
             'description_ar' => ['required','min:5','max:255'],                 
             'status'=>['required',Rule::in(['0','1'])],
        ]);

      if($request->hasFile("video_url")){
         $video_url=$request->video_url;
         $videoname=rand(1,10000)."_".time().".".$video_url->getClientOriginalExtension();
         $videopath = public_path('video/lesson/'.$lesson->video_url);
         if(File::exists($videopath)){
             File::delete($videopath);
         }
         $video_url->move(public_path("video/lesson/"),$videoname);
      }else{
         $videoname=$lesson->video_url;
      }

      $lesson->update([
             "course_id"=>$request->course_id,
             "id"=>$request->id,
             "video_url"=>$videoname,
             "title_en"=>$request->title_en,
             "title_ar"=>$request->title_ar,
             "description_en"=>$request->description_en,
             "description_ar"=>$request->description_ar,
             "status"=>$request->status
         ]);
          return redirect()->route('home')->with("message","lesson number[".$old_id."]have been updated");
    }

    
}
