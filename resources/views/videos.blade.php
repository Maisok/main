<x-app-layout>



    @foreach ($arr as $ar)
        <div>
            <p><a>Название:</a>{{$ar->title}} <span>Описание:</span>{{$ar->description}} Канал:{{$name}} Категория:{{$category_name}}</p>
            <video width="400" height="300" controls="controls">
                <source src="{{'../' . 'video/' . $ar->videoSRC}}" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
            </video>
        </div>
    @endforeach
    </x-app-layout>