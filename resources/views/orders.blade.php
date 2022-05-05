@extends('common')

@section('title') Orders @endsection

@section('content')


    <div class="container">

        <a href="/orders/new" class="btn btn-primary">Create new order</a>

        <table class="table">
            <thead>
            <tr>
                <th>id</th>
                <th>Created</th>
                <th>Customer Name</th>
                <th>Products</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($orders as $order)
                <tr>
                    <td>{{ $order['id'] }}</td>
                    <td>{{ $order['created'] }}</td>
                    <td>{{ $order['customer_name'] }}</td>
                    <td>
                        @foreach($order['products'] as $product)
                            {{ $product['name'] }}: {{ $product['amount'] }} pieces;<br>
                        @endforeach
                    </td>
                    <td>
                        <a href="/orders/{{ $order['id'] }}/edit" class="link-success">Edit</a>
                        <a href="/orders/{{ $order['id'] }}/copy" class="link-primary ml-2">Create on base</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>


@endsection
