<!-- resources/views/admin/banners/index.blade.php -->
@extends('layouts.admin')

@section('content')
    <h1>Banners</h1>
    <a href="{{ route('admin.banners.create') }}" class="btn btn-primary">Add New Banner</a>
    
    <table class="table">
        <thead>
            <tr>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($banners as $banner)
                <tr>
                    <td><img src="{{ asset('storage/' . $banner->image) }}" width="100"></td>
                    <td>
                        <a href="{{ route('admin.banners.edit', $banner->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admin.banners.destroy', $banner->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
