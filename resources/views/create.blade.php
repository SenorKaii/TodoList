@extends('app', ['title' => 'Create New List'])
@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

  <form action= "{{ route('store-list')}}" method="POST">
    @csrf
    <div class="mb-3 mt-3">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Please enter name" name="name">
    </div>
    <div class="mb-3">
      <label for="sts" class="form-label">Status:</label>
      <select class="form-select" id="sts" name="sts">
        <option value="">Please select status</option>
        <option value="1">Aktif</option>
        <option value="0">Tidak Aktif</option>
      </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
