<x-app-layout>
    <div class="py-12">
    <div class="container mx-auto px-4">
            <div class="max-w-8xl mx-auto sm:px-6 lg:px-8 grid-cols-4 gap-4">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <h2 class="text-4xl font-extrabold dark:text-white text-center mt-12">Главная</h2>
                    <div class="p-6 text-gray-900 dark:text-gray-100 grid grid-cols-4 gap-4">
                        @foreach ($arr as $ar)
                        <div>
                            <a href="{{route('videos', $ar->id)}}" class='text-sm sm:text-lg'>
                                <p>Название: {{$ar->title}}</p>
                            </a>
                            <a href="{{route('videos', $ar->id)}}" class='text-sm sm:text-lg'>
                                <p>Описание: {{$ar->description}}</p>
                            </a>
                            <img src="{{'image' . '/' . $ar->imageSRC}}" alt="fgh" width="500px" class='rounded-xl'>
                        </div> @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>