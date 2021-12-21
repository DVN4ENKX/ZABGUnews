<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css')}}" type="text/css">
  <script src="{{ URL::asset('js/bootstrap.min.js')}}"></script>
  <title>@yield('title')</title>
</head>

<body>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">ЗабГУ NEWS</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/home">Главная</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="/articles">Статьи</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="/about">О нас</a>
          </li>
        </ul>
        <form class="d-flex" method="get" action="{{route('search')}}">
          <input autocomplete="off" id="search" name="search" class="form-control me-2 " type="search" placeholder="Найти новость" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Поиск</button>
        </form>
      </div>
    </div>
  </nav>
  <div class="container">
    @yield('main_menu')
  </div>

</body>

</html>