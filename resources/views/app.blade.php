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
        <p>{{$title ?? 'List of activities'}}</p>
        
        @yield('content')
    </div>
  </body>
</html>
