<div class="album py-5 bg-light">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        @foreach($news as $item)
        <div class="col">
          <div class="card shadow-sm" style="border-radius:25px;">
            <div style="background: linear-gradient(transparent 0%, rgb(240,240,240) 62%);">
              <img src="{{ Storage::url('image/news/origin/'.$item->image) }}" alt="" width="100%" height="225" alt="{{$item->text}}" style="border-radius: 25px 25px 0px 0px;">
            </div>
            <div class="card-body">
              <p class="card-text">{{$item->article}}</p>
              <div class="d-flex justify-content-between align-items-center">
                <a class="btn btn-sm btn-outline-primary" href="{{route('newsupdate',$item->id)}}" role="button">Редактировать</a>
                <a class="btn btn-sm btn-outline-primary" href="{{route('adminreddel',$item->id)}}" role="button">Удалить</a>
                <small class="text-muted">{{$item->created_at}}</small>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
  @yield('adminnews')