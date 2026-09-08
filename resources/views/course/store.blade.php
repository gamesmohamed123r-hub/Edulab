@extends('layouts.app')
@section('content')
    <form action="{{route('course.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>Choose category for the course</label>
        <select name="category_id" class="form-control">
            @foreach ($result as $item)
            <option value="{{$item->id}}"{{old('category_id')==$item->id ? 'selected':''}}>
                {{$item->title_en}}
            </option>
            @endforeach
        </select>
          @error('category_id')
           <div class="alert alert-danger">{{ $message }}</div>
          @enderror

        <label>ID</label>
         <input type="text" name="id" value="{{old('id')}}" class="form-control mb-4">
          @error('id')
           <div class="alert alert-danger">{{ $message }}</div>
          @enderror

         <label>Images</label>
         <input type="file" name="cour_image" class="form-control mb-4">
           @error('cour_image')
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
            
         <label>price</label>
         <input type="number" step="0.01" placeholder="00.00" name="price" value="{{old('price')}}" class="form-control mb-4">
          @error('price')
           <div class="alert alert-danger">{{ $message }}</div>
          @enderror

         <input type="submit" value="create new course" class="btn btn-success d-block w-100">
    </form>
@endsection