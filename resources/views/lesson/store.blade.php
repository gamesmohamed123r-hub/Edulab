@extends('layouts.app')
@section('content')

     <form action={{route('lesson.store')}} method="POST" enctype="multipart/form-data">
         @csrf
          <label>from course</label>
          <select name="course_id" class="form-control">
            @foreach ($result as $item)
            <option value="{{$item->id}}"{{old('course_id')==$item->id ? 'selected' :''}}>
             {{$item->title_en}}
            </option>
            @endforeach
          </select>
          @error('course_id')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror

         <label>ID</label>
         <input type="text" name="id" value="{{old('id')}}" class="form-control mb-4">
          @error('id')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror

         <label>video</label>
         <input type="file" name="video_url" class="form-control mb-4">
         @error('video_url')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror

         <label>title_en</label>
         <input type="text" name="title_en" value="{{old('title_en')}}" class="form-control mb-4">
          @error('title_en')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror 

         <label>title_ar</label>
         <input type="text" name="title_ar" value="{{old('title_ar')}}"  class="form-control mb-4">
         @error('title_ar')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror

         <label>description_en</label>
         <input type="text" name="description_en" value="{{old('description_en')}}" class="form-control mb-4">
         @error('description_en')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror

         <label>description_ar</label>
         <input type="text" name="description_ar" value="{{old('description_ar')}}" class="form-control mb-4">
         @error('description_ar')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror

         <input type="submit" value="create new lesson" class="btn btn-success d-block w-100">
     </form> 
    
@endsection