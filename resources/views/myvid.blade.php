<x-app-layout>
    <div class="mt-12">
        <h2 class="text-4xl font-extrabold dark:text-white text-center mt-12">Редактирование</h2>
        <div class="flex items-center">

            @foreach ($arr as $ar)

            <div class="">
                <p>Канал:{{$name}}</p>

                <video width="800" controls="controls">
                    <source src="{{asset('storage/video') . '/' . $ar->videoSRC}}" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                </video>
                <p><a>Название:</a>{{$ar->title}}</p>
                <p><span>Описание:</span>{{$ar->description}}</p>
                <p>Категория:{{$category_name}}</p>
                <p>Дата публикации:{{$ar->created_at}}</p>
                

                @if(Auth::check())
                <span>Лайки</span>
                <span>{{$likes}}</span>
                <span>Дизлайки</span>
                <span>{{$dislike}}</span>
                @endif
            </div>
            <div class="mt-12">
                <p>Изменение данных</p>

                <form action="{{'myvid' . $ar->id}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="text" value="{{$ar->id}}" hidden name="id">
                    <p>Название</p>
                    <input type="text" name="name" placeholder="Название" required maxlength="255" value="{{$ar->title}}">
                    <p>Описание</p>
                    <input type="text" name="desc" placeholder="Описание" maxlength="255" value="{{$ar->description}}">
                    <p>Файл видео</p>
                    <input type="file" name="vid" required>
                    <p>Файл превью</p>
                    <input type="file" name="img" required>


                    <p>Выберите категорию</p>
                    <select name="category">
                        @foreach ($catarr as $value)
                        <option value="{{$value->id}}">{{$value->name}}</option>
                        @endforeach
                    </select>
                    <br>
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Обновить</button>
                </form>
            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>