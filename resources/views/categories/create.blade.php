@extends('layouts.app')

@section('content')
    <h1>Create New Category</h1>
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Category Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Create Category</button>
        <a href="{{ route('categories.index') }}" class="btn btn-secondary mt-3">Cancel</a>
    </form>
@endsection