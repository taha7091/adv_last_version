<!-- resources/views/admin/orders/index.blade.php -->
@extends('layouts.admin')

@section('content')
    <h1>Orders</h1>
    
    <table class="table">
        <thead>
            <tr>
                <th>Order ID</th>
                <th>Customer</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->user->name }}</td>
                    <td>{{ $order->status }}</td>
                    <td>
                        <a href="{{ route('admin.orders.show', $order->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('admin.orders.edit', $order->id) }}" class="btn btn-warning">Change Status</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
