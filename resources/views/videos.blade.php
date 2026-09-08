@extends('layouts.guest')
@section('content')

 @foreach ($lesson->lessons as $item)
     <ul class="list-group">
        <li class="list-group-item">
            <h5>{{ $item->title_en }}</h5>
           <video style="width: 950px; height:100px" controls preload="metadata">
              <source src="{{asset('video/lesson/'.$item->video_url)}}"> 
           </video></li>
     </ul>
 @endforeach         



@endsection