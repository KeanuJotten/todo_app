@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="card col-md-12">
                <div class="card-body">
                    <h5 class="card-title">{{ $task->title }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Task Details</h6>
                    <hr>
                    <p class="card-text">
                        <strong>Description: </strong>{{ $task->description }}
                    </p>
                    <hr>
                    <div class="row">
                        <a class="btn btn-info" href="{{ route('task.index') }}" class="card-link" style="margin-right:20px;">All tasks</a>
                        <form action="{{ route('task.destroy', $task->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <input type="submit" class="btn btn-danger" value="delete">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection