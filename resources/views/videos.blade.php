<x-app-layout>



    @foreach ($arr as $ar)
        <div>
            <p><a>Название:</a>{{$ar->title}} <span>Описание:</span>{{$ar->description}} Канал:{{$name}}
                Категория:{{$category_name}}</p>
            <video width="400" height="300" controls="controls">
                <source src="{{'../' . 'video/' . $ar->videoSRC}}" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
            </video>
            <form method="post" action="{{route('like')}}">
                @csrf
                <input type="text" value="{{$ar->id}}" hidden name="id_like">
                <button type="submit">Лайк</button>
            </form>

            <form method='post' action="{{route('dislike')}}">
                @csrf
                <input type="text" value="{{$ar->id}}" hidden name="id_dislike">
                <button type="submit">Дизлайк</button>
            </form>
        </div>
    @endforeach
</x-app-layout>