@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="card col-md-6">
            <div class="card-body">
                <h5 class="card-title">Edit task</h5>
                <h6 class="card-subtitle mb-2 text-muted">Whoops! Some things keep changing ;)</h6>
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
            </div>
        </div>
    </div>
</div>
@endsection