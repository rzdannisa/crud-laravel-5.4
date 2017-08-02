<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/js/materialize.min.js"></script>

    <title>CRUD L.5.4</title>

  </head>
  <body>

    <nav>
      <div class="nav-wrapper">
        <a href="#" class="brand-logo right">L4CRUD</a>
        <ul id="nav-mobile" class="left hide-on-med-and-down">
          <li><a href="{{url('crud/create')}}">Add</a></li>
          <li><a href="{{url('crud')}}">Data</a></li>
        </ul>
      </div>
    </nav>

    @yield('content')

  </body>
</html>
