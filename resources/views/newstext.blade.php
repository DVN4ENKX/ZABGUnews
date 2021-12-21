@extends('footer')
@extends('newsmaker')
@extends('menu')

@section('title')
{{$news->article}}
@endsection

@section('newstext')
<div class="container ">
    <div class="d-md-flex flex-md-row-reverse align-items-center justify-content-center ">
      <h1 class="modal-title " id="content" style="font-style: italic;">{{$news->article}}</h1>
    </div>
    <div class="col">
      <img src="{{ Storage::url('image/news/origin/'.$news->image) }}" width="400" height="300" alt="" style="border-style: solid;
    border-radius: 50px;border-color: #911e42;">
    </div>
    <p class="bd-lead" style="margin-top: 10px;text-indent: 30px;border-style: solid;
    border-block-style: none;
    padding: inherit;border-color: #911e42;">
    <?php echo '<p style="text-indent: 2.5em;
    margin-block-end: 1em;
    line-height: 1.5em;font-weight: bold;">' . str_replace("\n", '</p><p style="text-indent: 2.5em;
    margin-block-end: 1em;
    line-height: 1.5em;">', $news->text) . '</p>';?>
</p>
  </div>
  <p class="card-text" style="padding-left: 70%;padding-top:20px;font-weight: bold;">Опубликовано {{$news->created_at}}</p>


@endsection