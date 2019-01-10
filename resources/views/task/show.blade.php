@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="card col-md-12">
                <div class="card-body">
                    <h5 class="card-title">Task</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $task->title }}</h6>
                    <p class="card-text">
                        {{ $task->description }}
                    </p>
                    <a href="{{ route('task.index') }}" class="card-link">All tasks</a>
                    <form action="{{ route('task.destroy', $task->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <input type="submit" class="btn btn-danger" value="delete">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection