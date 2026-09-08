@extends('layouts.app')
@section('content')

     <form action="{{route('category.store')}}" method="POST" enctype="multipart/form-data">
         @csrf         
         <label>ID</label>
         <input type="text" name="id" value="{{old('id')}}" class="form-control mb-4">
          @error('id')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
         <label>Images</label>
         <input type="file" name="cate_image" class="form-control mb-4">
         @error('cate_image')
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
         <input type="submit" value="create new category" class="btn btn-success d-block w-100">
     </form> 
    
@endsection