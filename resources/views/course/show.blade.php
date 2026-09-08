@extends('layouts.app')
@section('content')

   <div class="container">
    <div class="row">
        <div class="col-md-12 m-auto">
            <h3 class="text-center m">Details of course number <span class="badge text-bg-secondary">{{$result->id}}</span></h3>
            <table class="table table-dark table-striped table-hover text-center align-middle">
               <thead>
                <th>from category</th>
                <th>id</th>
                <th>image</th>
                <th>title_en</th>
                <th>title_ar</th>
                <th>description_en</th>
                <th>description_ar</th>
                <th>price</th>
                <th>status</th>
                <th>created at</th>
                <th>operation</th>
               </thead>
                <tbody>
                    <tr>
                        <td>{{ $result->category->title_en ?? 'NO Category' }}</td>
                        <td>{{ $result->id }}</td>
                        <td>
                           <img style="width: 100px" src="{{asset('img/course/'.$result->cour_image)}}" alt="">
                         </td>
                        <td>{{ $result->title_en }}</td>
                        <td>{{ $result->title_ar }}</td>
                        <td>{{ $result->description_en }}</td>
                        <td>{{ $result->description_ar }}</td>
                        <td>{{ $result->price }}</td>
                        <td>{{ $result->status }}</td>
                        <td>{{ $result->created_at }}</td>
                        <td>
                            <a href={{route('home')}} class="btn btn-success">
                                <i class="fa-solid fa-circle-arrow-left"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
   </div>

@endsection