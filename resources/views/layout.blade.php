<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcom to the Vet</title>
  <!-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> -->
  <style>
  img{
    width:150px;
    height:auto;
  }
  </style>
</head>
<body>
  

  @yield('content')
  @yield('pets')
  
</body>
</html>