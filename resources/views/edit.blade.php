@extends('app', ['title' => 'Edit List'])
@section('content')

  <form action= "{{ route('update-list', $activity->id)}}" method="POST">
    @csrf
    <div class="mb-3 mt-3">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Please enter name" name="name" value="{{ $activity->name ?? old('name')}}">
    </div>
    <div class="mb-3">
      <label for="sts" class="form-label">Status:</label>
      <select class="form-select" id="sts" name="sts">
        <option value="">Please select status</option>
        <option value="1" {{ $activity->sts == 1 ? 'selected':''}}>Aktif</option>
        <option value="0" {{ $activity->sts == 0 ? 'selected':''}}>Tidak Aktif</option>
      </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
