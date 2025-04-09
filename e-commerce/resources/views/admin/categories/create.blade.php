@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Create Category</h1>
        
        <form action="{{ route('admin.categories.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Category Name</label>
                <input type="text" name="name" class="form-control" id="name" required>
            </div>

            <button type="submit" class="btn btn-success">Create Category</button>
        </form>
    </div>
@endsection
