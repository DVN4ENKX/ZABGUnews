<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css')}}" type="text/css">
  <script src="{{ URL::asset('js/bootstrap.min.js')}}"></script>
  <title>{{$news->article}}</title>
</head>

<body>
  
  @yield('newstext')
</body>

</html>