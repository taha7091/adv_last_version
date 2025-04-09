<!-- resources/views/admin/banners/edit.blade.php -->
@extends('layouts.admin')

@section('content')
    <h1>Edit Banner</h1>

    <form action="{{ route('admin.banners.update', $banner->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="image">Banner Image</label>
            <input type="file" name="image" id="image" class="form-control">
            <img src="{{ asset('storage/' . $banner->image) }}" width="100">
        </div>

        <button type="submit" class="btn btn-primary">Update Banner</button>
    </form>
@endsection
