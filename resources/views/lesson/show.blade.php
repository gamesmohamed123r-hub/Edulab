@extends('layouts.app')
@section('content')
     <div class="container">
    <div class="row">
        <div class="col-md-12 m-auto">
            <h3 class="text-center m">Details of lesson number <span class="badge text-bg-secondary">{{$lesson->id}}</span></h3>
            <table class="table table-dark table-striped table-hover text-center align-middle">
               <thead>
                <th>from course</th>
                <th>id</th>
                <th>title_en</th>
                <th>title_ar</th>
                <th>description_en</th>
                <th>description_ar</th>
                <th>video</th>
                <th>status</th>
                <th>created at</th>
                <th>operation</th>
               </thead>
                <tbody>
                    <tr>
                        <td>{{ $lesson->courses->title_en ?? 'NO Courses' }}</td>
                        <td>{{ $lesson->id }}</td>
                        <td>{{ $lesson->title_en }}</td>
                        <td>{{ $lesson->title_ar }}</td>
                        <td>{{ $lesson->description_en }}</td>
                        <td>{{ $lesson->description_ar }}</td>
                        <td>
                            @if($lesson->video_url)
                                <video style="width: 150px; height: 100px; object-fit: cover;" controls preload="metadata">
                                    <source src="{{ asset('video/lesson/' . $lesson->video_url) }}">
                                    Your browser does not support the video tag.
                                </video>
                            @else
                                <span class="text-muted">No Video</span>
                            @endif
                        </td>
                        <td>{{ $lesson->status }}</td>
                        <td>{{ $lesson->created_at }}</td>
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
   </div
@endsection