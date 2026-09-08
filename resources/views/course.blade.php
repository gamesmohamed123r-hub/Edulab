@extends('layouts.guest')

@section('content')
 
@if(session('messagepayment'))
    <div class="alert alert-success">
        {{ session('messagepayment') }}
    </div>
@endif
<div class="container mb-5 mt-5">
    <div class="row">
        @foreach ($category as $item)
    <div class="card-shadow-sm">
        <a href="{{route('category.details', $item->id)}}">
            <img style="width: 350px" src="{{asset('img/category/'.$item->cate_image)}}" class="card-img-top">
        </a>
        <div class="card-body">
            <h5 class="card-title">{{$item->title_en}}</h5>
            <p>{{$item->description_en}}</p>
            <p>price {{$item->totalprice}} $</p>

            @php
                // بنتحقق هل اليوزر مسجل دخول وهل اشترى الكاتيجوري دي؟
                $isPurchased = auth()->check() && \App\Models\Enrollment::where('user_id', auth()->id())
                    ->where('category_id', $item->id)
                    ->where('payment_status', 'paid')
                    ->exists();
            @endphp

            @if($isPurchased)
                <a href="{{route('category.details', $item->id)}}" class="btn btn-success">Enter</a>
            @else
                <a href="{{route('checkout.page', $item->id)}}" class="btn btn-secondary">Buy Now</a>
            @endif
        </div>
    </div>
@endforeach
    </div>
</div>
    
@endsection