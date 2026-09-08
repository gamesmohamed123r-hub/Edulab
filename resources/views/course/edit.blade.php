@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 m-auto">
                <form action="{{route('course.update')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="old_id" value="{{$result->id}}">
                    
                    <label>edit the category for this course</label>
                     <select name="category_id" class="form-control">
                         @foreach ($categories as $item)
                             <option value="{{$item->id}}"{{old('category_id',$result->category_id)==$item->id ? 'selected':''}}>
                                {{$item->title_en}}
                             </option>
                         @endforeach
                     </select>

                    <label>id</label>
                    <input type="text" name="id" value="{{$result->id}}" class="form-control mb-4">
                    @error('id')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror

                    <label>image</label>
                    <input type="file" name="cour_image" class="form-control mb-4">
                    @error('cour_image')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror

                   <label>title_en</label>
                   <input type="text" name="title_en" value="{{$result->title_en}}" class="form-control mb-4">
                   @error('title_en')
                       <div class="alert alert-danger">{{$message}}</div>
                   @enderror

                   <label>title_ar</label>
                   <input type="text" name="title_ar" value="{{$result->title_ar}}" class="form-control mb-4">
                   @error('title_ar')
                       <div class="alert alert-danger">{{$message}}</div>
                   @enderror

                   <label>description_en</label>
                   <input type="text" name="description_en" value="{{$result->description_en}}" class="form-control mb-4">
                   @error('description_en')
                       <div class="alert alert-danger">{{$message}}</div>
                   @enderror

                   <label>description_ar</label>
                   <input type="text" name="description_ar" value="{{$result->description_ar}}" class="form-control mb-4">
                   @error('description_ar')
                       <div class="alert alert-danger">{{$message}}</div>
                   @enderror

                   <label>price</label>
                    <input type="number" step="0.01"  name="price" value="{{$result->price}}" class="form-control mb-4">
                     @error('price')
                      <div class="alert alert-danger">{{ $message }}</div>
                     @enderror

                     <label>status</label>
                     <select name="status">
                        <option value="1"{{$result->status=='1' ? 'selected' :''}}>active</option>
                        <option value="0"{{$result->status=='0' ? 'selected' :''}}>inactive</option>
                     </select>
                     @error('status')
                     <div class="alert alert-danger">{{$message}}</div>
                     @enderror
                   
                    <input type="submit" value="change it" class="btn btn-success d-block w-100">
                </form>
            </div>
        </div>
    </div>
@endsection