<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/d93cd3a54f.js" crossorigin="anonymous"></script>
  </head>

  <body>
    <div class="container mt-3">
      <h2>My To Do List</h2>
      <p>List of activities</p>
      
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
          @foreach ($activities as $activity)
            <tr>
              <td>{{$activity->id}}</td>
              <td>{{$activity->name}}</td>
              <td>{{$activity->sts = 1 ? 'Active' : 'Inactive'}}</td>
              <td>
                <button type="button" class="btn btn-primary">Update</button>
                <button type="button" class="btn btn-danger">Delete</button>
              </td>
            </tr>
          @endforeach
        </tbody>

      </table>
    </div>
  </body>
</html>
