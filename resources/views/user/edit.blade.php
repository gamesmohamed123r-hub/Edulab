@extends('layouts.app')
@section('content')
<div class="container bg-secondary">
    <div class="row">
        <div class="col-md-10 m-auto">
            <form action="{{route('user.update')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="old_id" value="{{$result->id}}">

                <label>id</label>
                <input type="text" name="id" value="{{$result->id}}" class="form-control mb-4">
                @error('id')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror

                <label>name</label>
                <input type="text" name="name" value="{{$result->name}}" class="form-control mb-4">
                @error('name')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror

                <label>email</label>
                <input type="email" name="email" value="{{$result->email}}" class="form-control mb-4">
                 @error('email')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror 

                <label>phone</label>
                <input type="text" name="phone" value="{{$result->phone}}" class="form-control mb-4">
                 @error('phone')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror

                <label>status</label>
                <select name="status" class="form-control mb-4">
                    <option value="1" {{$result->status == '1' ? 'selected':''}}>active</option>
                    <option value="0" {{$result->status =='0' ? 'selected':''}}>inactive</option>
                </select>
                @error('status')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror

                <select name="role" class="form-control mb-4">
                    <option value="user" {{$result->role == 'user' ? 'selected':''}}>user</option>
                    <option value="admin" {{$result->status =='admin' ? 'selected':''}}>admin</option>
                </select>
                @error('role')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <input type="submit" value="update" class="btn btn-success d-block w-100 mb-4">
            </form>
        </div>
    </div>
</div>
@endsection