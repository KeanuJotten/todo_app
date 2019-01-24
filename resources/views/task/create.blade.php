@extends('layouts.app')

@section('content')
<div class="container">
    <div class="alert alert-success" role="alert" style="display:none;"></div>
    <div class="row">
        <div class="card col-md-6">
            <div class="card-body">
                <h5 class="card-title">Create Task</h5>
                <h6 class="card-subtitle mb-2 text-muted">Create some awsome tasks ;)</h6>
                <form method="POST">
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
                        <button type="reset" id="resetTaskForm" class="btn btn-warning">Reset</button>
                        <button type="button" id="createTask" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
@push('request-scripts')
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $("meta[name=csrf-token]").attr('content')
        }
    });
    $('#createTask').on('click', function(e){
        e.preventDefault();
        
        let title = $("input[name=title]").val();
        let desc = $("input[name=description]").val();

        $.ajax({
            type: "post",
            url: "{{ route('task.store') }}",
            data: {
                title:title,
                description:desc
            },
            success(response) {
                $('.alert').css('display', 'inherit').html(response.success);
            }
        });
    });
    $('#resetTaskForm').on('click', function(){
        $('.alert').css('display', 'none')
    });
</script>
@endpush