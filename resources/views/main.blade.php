<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <a href="">Регистрация</a>
    <a href="">Авторизация</a>
    <a href="">Главная</a>
    <a href="{{route('addvideo')}}">Добавить видео</a>

    @foreach ($arr as $ar)
        <p><a href="{{route('videos', $ar->id)}}">Название:</a>{{$ar->title}} <span>Описание:</span>{{$ar->description}}</p>
        <img src="{{'storage/image/' . $ar->imageSRC}}" alt="fgh" width="500px">
    @endforeach
</body>
</html>