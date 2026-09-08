<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Validation\Rule;

class CategoryController extends Controller
{   
    public function getdatatouser(){

        $category=Category::where('status','1')->with('courses')->get();
        foreach($category as $categoryprice){
            $categoryprice->totalprice = $categoryprice->courses->sum('price');
        }
        return view('course',compact('category'));
        
    }
    public function details($id){
      $category = Category::with('courses')->findOrFail($id);      
      return view('details', compact('category'));
    }
    function show($id){
        $category=Category::findOrFail($id);
        return view("category.show",["result"=>$category]);
    }
    function delete($id){
        $category=Category::findOrFail($id);
        $image_path= public_path('img/category/'.$category->cate_image);
        if(File::exists($image_path)){
            File::delete($image_path);
        }
        $category->delete();
        return redirect()->route('home')->with("message","category number [".$id."] have been deleted");

    }
    function create(){
        return view('category.store');
    }
    function store(Request $request){
        $request->validate([
            'id'=>['required','unique:categories','max:255'],
            'cate_image' => ['nullable','mimes:png,jpg','max:2048'],
            'title_en' => ['required','min:5','max:255'],
            'title_ar' => ['required','min:5','max:255'],
            'description_en' => ['required','min:5','max:255'],
            'description_ar' => ['required','min:5','max:255'],
        ],[
            "id.required"=>"hay"
        ]);
        $imagesname="";
        if($request->hasFile("cate_image")){
            $cate_image=$request->cate_image;
            $imagesname=rand(1,10000)."_".time().".".$cate_image->extension();
            $cate_image->move(public_path("img/category/"),$imagesname);
        }
        Category::create([
            "id"=>$request->id,
            "cate_image"=>$imagesname,
            "title_en"=>$request->title_en,
            "title_ar"=>$request->title_ar,
            "description_en"=>$request->description_en,
            "description_ar"=>$request->description_ar,
        ]);

        return redirect()->route('home')->with("message","category created successfully");

    }
    function edit($id){
        $category=Category::findOrFail($id);
        return view('category.edit',["result"=>$category]);
    }
    function update(Request $request){
        $old_id=$request->old_id;
        $category=Category::findOrFail($old_id);
        
        $request->validate([
            'id'=>['required',Rule::unique('categories','id')->ignore($old_id)],
            'cate_image' => ['nullable','mimes:png,jpg','max:2048'],
            'title_en' => ['required','min:3','max:255'],
            'title_ar' => ['required','min:3','max:255'],
            'description_en' => ['required','min:5','max:255'],
            'description_ar' => ['required','min:5','max:255'],
            'status'=>['required',Rule::in(['0','1'])]    
        ]);
        if($request->hasFile("cate_image")){
            $cate_image=$request->cate_image;
            $imagesname=rand(1,10000)."_".time().".".$cate_image->extension();
            $image_path= public_path('img/category/'.$category->cate_image);
            if(File::exists($image_path)){
                File::delete($image_path);
            }
            $cate_image->move(public_path("img/category/"),$imagesname);            
        }else{
            $imagesname=$category->cate_image;
        }

        $category->update([
            "id"=>$request->id,
            "cate_image"=>$imagesname,
            "title_en"=>$request->title_en,
            "title_ar"=>$request->title_ar,
            "description_en"=>$request->description_en,
            "description_ar"=>$request->description_ar,
            "status"=>$request->status
        ]);
        return redirect()->route('home')->with("message","category number[".$old_id."]have been updated");
    }
}
