@extends('layouts.app')

@section('content')
    <h1>Create New Tag</h1>
    <form action="{{ route('tags.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Tag Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Create Tag</button>
        <a href="{{ route('tags.index') }}" class="btn btn-secondary mt-3">Cancel</a>
    </form>
@endsection