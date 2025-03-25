@extends('layouts.app')

@section('content')
    <h1>Edit Tag</h1>
    <form action="{{ route('tags.update', $tag->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Tag Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $tag->name }}" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Update Tag</button>
        <a href="{{ route('tags.index') }}" class="btn btn-secondary mt-3">Cancel</a>
    </form>
@endsection