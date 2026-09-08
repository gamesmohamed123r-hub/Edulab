@extends('layouts.app')
@section('content')

    <div class="container bg-success">
        <div class="row">
            <div class="col-md-10 m-auto">
                <form action="{{route('user.store')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <label>ID</label>
                  <input type="text" name="id" value="{{old('id')}}" class="form-control mb-4">
                     @error('id')
                      <div class="alert alert-danger">{{$message}}</div>
                     @enderror

                  <label>name</label>
                  <input type="text" name="name" value="{{old('name')}}" class="form-control mb-4">
                     @error('name')
                      <div class="alert alert-danger">{{$message}}</div>
                     @enderror

                  <label>email</label>
                  <input type="text" name="email" value="{{old('email')}}" class="form-control mb-4">
                     @error('email')
                      <div class="alert alert-danger">{{$message}}</div>
                     @enderror

                  <label>phone</label>
                  <input type="text" name="phone" value="{{old('phone')}}" class="form-control mb-4">
                     @error('phone')
                      <div class="alert alert-danger">{{$message}}</div>
                     @enderror

                     <label>password</label>
                      <input type="password" name="password" class="form-control mb-4">
                      @error('password')
                          <div class="alert alert-danger">{{$message}}</div>
                      @enderror
                      
                  <input type="submit" value="create new user" class="btn btn-secondary d-block w-100 mb-4">
                  
                </form>
            </div>
        </div>
    </div>
    
@endsection