@extends('common')

@section('title') Edit @endsection

@section('content')


    <div class="container">

        <h1>Order #{{ $order['id'] }}</h1>

        {!! Form::open(['method' => 'post']) !!}
            <div class="mb-3">
                <label for="customer_name" class="form-label">Customer Name</label>
                <input type="text" class="form-control" id="customer_name" name="customer_name" value="{{ $order['customer_name'] ?? '' }}">
            </div>
            <div class="mb-3">
                <label for="product_1" class="form-label">Amount Of SSD 128 GB</label>
                <input type="number" class="form-control" id="product_1" name="product_1" value="{{ $order['products']['1']['amount'] ?? '' }}">
            </div>
            <div class="mb-3">
                <label for="product_2" class="form-label">Amount Of SSD 200 GB</label>
                <input type="number" class="form-control" id="product_2" name="product_2" value="{{ $order['products']['2']['amount'] ?? '' }}">
            </div>
            <div class="mb-3">
                <label for="product_3" class="form-label">Amount Of SSD 400 GB</label>
                <input type="number" class="form-control" id="product_3" name="product_3" value="{{ $order['products']['3']['amount'] ?? '' }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        {!! Form::close() !!}
    </div>


@endsection
