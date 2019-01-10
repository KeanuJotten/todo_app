@extends('layouts.app')

@section('content')
<h2>Edit task</h2>
<form method="POST" action="{{ route('task.update', $task->id) }}">
    @csrf
    @method('patch')
    <div class="form-group">
        <label for="title">Title</label>
    <input type="text" name="title" class="form-control" id="title" value="{{ old('title', $task->title) }}">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
    <input type="text" name="description" class="form-control" value="{{ old('description', $task->description) }}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection