<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            @if(!isset(Auth::user()->name))
                <a href="{{route('register')}}">Регистрация</a>
                <a href="{{route('login')}}">Авторизация</a>
            
            @endif
            <a href="{{route('addvideo')}}">Добавить видео</a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                @foreach ($arr as $ar)
                    <p><a href="{{route('videos', $ar->id)}}">Название:</a>{{$ar->title}} <span>Описание:</span>{{$ar->description}}</p>
                    <img src="{{'storage/image/' . $ar->imageSRC}}" alt="fgh" width="500px">
                @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
