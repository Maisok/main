<x-app-layout>
<div class="mt-12">
    <form class="max-w-sm mx-auto" action="{{route('pushvideos')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <p>Название</p>
        <input type="text" name="name" placeholder="Название" required maxlength="255">
        <p>Описание</p>
        <input type="text" name="desc" placeholder="Описание" maxlength="255">
        <p>Файл видео</p>
        <input type="file" name="video" required>
        <p>Файл превью</p>
        <input type="file" name="image" required>
        <p>Выберите категорию</p>
        <select name="category">
            @foreach ($catarr as $value)
            <option value="{{$value->id}}">{{$value->name}}</option>
            @endforeach
        </select>
        <br>
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Добавить</button>
    </form></div>
</x-app-layout>