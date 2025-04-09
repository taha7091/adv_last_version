<!-- resources/views/admin/banners/create.blade.php -->
@extends('layouts.admin')

@section('content')
    <h1>Add New Banner</h1>

    <form action="{{ route('admin.banners.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image">Banner Image</label>
            <input type="file" name="image" id="image" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Save Banner</button>
    </form>
@endsection
