<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css')}}">

    <title>Изменение новости</title>
</head>

<body>

    <div style="justify-content: center;
    display: flex;padding-top: 30px;" class="container">
        <div class="col-8">
            <h1>Изменить новость</h1>
            <form method="post" action="{{ route('adminredpost',$news->id) }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="article">Заголовок новости</label>
                    <textarea type="text" class="form-control" id="article" name="article">{{$news->article}}</textarea>
                </div>
                <div class="form-group">
                    <label for="text">Содержание</label>
                    <textarea type="text" class="form-control" id="text" rows="10" name="text">{{$news->text}}</textarea>
                </div>
                <div style="margin-top:30px;" class="form-group">
                    <label for="image">Картинка для новости</label>
                    <input type="file" class="form-control-file" id="image" name="image">{{$news->image}}
                </div>
                <button style="margin-top:30px;" type="submit" class="btn btn-primary">Изменить</button>
                <a style="margin-left: 30px;margin-top:30px;" type="submit" class="btn btn-secondary" href="{{ route('adminred')}}">Отмена</a>
            </form>
        </div>
    </div>
</body>

</html>