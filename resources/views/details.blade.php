@extends('layouts.guest')

@section('content')
<div class="container mt-5">
    <h1>{{ $category->title_en }}</h1>
    <div class="row"> @foreach ($category->courses as $course)
            @php
                $isEnrolled = false;
                if(auth()->check()) {
                    $isEnrolled = \App\Models\Enrollment::where('user_id', auth()->id())
                        ->where('category_id', $category->id)
                        ->where('payment_status', 'paid')
                        ->exists();
                }
            @endphp

            <div class="col-md-4">
                <div class="card mb-4">
                    @if ($isEnrolled)                                   
                        <a href="{{ route('course.lesson', $course->id) }}">
                            <img style="width: 100%; height: auto;" src="{{ asset('/img/course/'.$course->cour_image) }}">
                        </a>
                    @else
                        <a href="{{ route('checkout.page', $category->id) }}">
                            <img style="width: 100%; height: auto;" src="{{ asset('/img/course/'.$course->cour_image) }}">                            
                        </a>
                    @endif

                    <div class="card-body text-center">
                        <h5 class="card-title">{{ $course->title_en }}</h5>
                        <p>{{ $course->description_en }}</p>
                        <p class="text-muted">Lessons: {{ $course->lessons->count() }}</p>
                        <p><strong>Price: {{ $course->price }}$</strong></p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection