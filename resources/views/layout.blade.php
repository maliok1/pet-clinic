<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcom to the Vet</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
  

  @yield('list')
  @yield('pets')
  @yield('owner')
  
</body>
</html>