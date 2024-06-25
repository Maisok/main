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
    <h1>Видео xddd</h1>
    @foreach ($arr as $ar)
    <div>
    <p><a>Название:</a>{{$ar->title}} <span>Описание:</span>{{$ar->description}}</p>
    <video width="400" height="300" controls="controls">
   <source src="{{"../"}}{{'storage/video/' . $ar->videoSRC}}" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
  </video>
</div>
        @endforeach
</body>
</html>