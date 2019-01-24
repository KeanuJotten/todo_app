@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
      <div class="card col-md-12">
          <div class="card-body">
            <h5 class="card-title">Tasks</h5>
            <h6 class="card-subtitle mb-2 text-muted">What to do...?</h6>
            <table id="taskTable" class="table">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">title</th>
                  <th scope="col">Actions</th>
                </tr>
              </thead>
              <tbody>
                 @foreach ($tasks as $task)
                    <tr>
                        <td>{{ $task->id }}</td>
                        <td>{{ $task->title }}</td>
                    <td>
                      <a href="{{ route('task.edit', $task->id) }}" style="margin-right: 15px;"><i class="fa fa-pencil"></i></a>
                      <a href="{{ route('task.show', $task->id) }}"><i class="fa fa-eye"></i></a>
                    </td>
                    </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
  </div>
</div>
@endsection
@push('datatable-scripts')
<script>
    $('#taskTable').DataTable();
</script>
@endpush