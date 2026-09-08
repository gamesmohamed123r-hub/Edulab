@extends('layouts.guest')
@section('content')
<div class="container mt-5">
    <h2>Complete Your Purchase</h2>
    <div class="card p-4">
        <h4>Category: {{ $category->title_en }}</h4>
        <p>Total Price: <strong>{{ $category->courses->sum('price') }} $</strong></p>
        
        <form action="{{ route('process.payment') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="category_id" value="{{ $category->id }}">
            
            <div class="mb-3">
                <label class="form-label">Cardholder Name</label>
                <input type="text" name="holder_name" class="form-control" required placeholder="John Doe">
            </div>

            <div class="mb-3">
                <label class="form-label">Card Number</label>
                <input type="text" name="card_number" class="form-control" required placeholder="1234 5678 9101 1121" maxlength="16">
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Expiry Date</label>
                    <input type="text" name="expiry" class="form-control" required placeholder="MM/YY">
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">CVV</label>
                    <input type="text" name="cvv" class="form-control" required placeholder="***" maxlength="3">
                </div>
            </div>

            <button type="submit" class="btn btn-success w-100">Pay Now</button>
        </form>
    </div>
</div>
@endsection