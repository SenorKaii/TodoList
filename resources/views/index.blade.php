    @extends('app')
    @section('content')

    @if (session('success'))
      <div class="alert alert-success">
          {{ session('success') }}
      </div>

    @else
      <div class="alert alert-danger">
        {{ session('error') }}
      </div>
    @endif

      
      <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-2">
        <a href="{{ route('create-list')}}">
          <button class="btn btn-success" type="button"><i class="fa-solid fa-plus"></i> Add Activity</button>
        </a>
      </div> 

      <table class="table table-striped table-bordered">
        <thead>
          <tr>
            <th>No.</th>
            <th>Activity</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>

        <tbody>
          @foreach ($activities as $no => $activity)
            <tr>
              <td>{{ ++$no }}</td>
              <td>{{$activity->name}}</td>
              <td>{{$activity->sts = 1 ? 'Active' : 'Inactive'}}</td>
              <td>
                <a href="{{ route('edit-list', $activity->id)}}"><button type="button" class="btn btn-primary">Edit</button></a>
                <form action="{{ route('delete-list', $activity->id) }}" method="POST" style="display: inline;">
                  @csrf
                  @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
              </form>
              </td>
            </tr>
          @endforeach
        </tbody>

      </table>
      {{ $activities->links('pagination::bootstrap-5') }}

      @endsection
