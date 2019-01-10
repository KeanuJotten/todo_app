@extends('layouts.app')

@section('content')
<div class="container">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
    <div class="row">
            <div class="card col-md-6">
                    <div class="card-body">
                      <h5 class="card-title">Create Task</h5>
                      <h6 class="card-subtitle mb-2 text-muted">Create some awsome tasks ;)</h6>
                      <form method="POST" action="{{ route('task.store') }}">
                            @csrf
                            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                <label for="title">Title</label>
                                <input type="text" name="title" class="form-control" value="{{ old('title')}}">
                    
                                <small class="text-danger">{{ $errors->first('title') }}</small>
                            </div>
                            <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                <label for="description">Description</label>
                                <input type="description" name="description" class="form-control" value="{{ old('description')}}">
                    
                                <small class="text-danger">{{ $errors->first('description') }}</small>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                  </div>
    </div>
</div>

@endsection