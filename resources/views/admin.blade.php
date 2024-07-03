<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <span class="text-2xl font-bold dark:text-white">Список всех категорий</span>
            @foreach ($arrcat as $arrcatval)
            <div class="flex">
                <p class="text-2xl">{{$arrcatval->name}}</p>
                <form method="post" action="{{route('deletecat', $arrcatval->id)}}" class="float-right">
                    @method('DELETE') @csrf <input type="text" value="{{$arrcatval->id}}" name="id" hidden>
                    <button type="submit" class="ml-1.5 text-white bg-blue-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Удалить</button>
                </form>
            </div>
            @endforeach
            <form method="POST" action="{{ route('admin.cat') }}">
                @csrf
                <input type="text" placeholder="Название категории" name="namecat" required class="mb-5 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"> <button type="submit" class="text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Добавить новую категорию</button>
            </form>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="max-w-sm mx-auto">
                    <div class="p-6 text-gray-900 dark:text-gray-100"> @foreach ($arr as $ar) <p class="mb-3 text-lg text-gray-500 md:text-xl dark:text-gray-400"><a href="{{route('videos', $ar->id)}}">Название: {{$ar->title}}</a></p>
                        <span class="mb-3 text-lg text-gray-500 md:text-xl dark:text-gray-400">Описание: {{$ar->description}}</span>
                        <img src="{{'image/' . $ar->imageSRC}}" alt="fgh" width="500px">
                        <form method='post' action="{{route('editvideo')}}">
                            <input type="text" value="{{$ar->id}}" hidden name="id_vid"> @method('PUT')
                            @csrf
                            <select name="status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="none">Нет ограничений</option>
                                <option value="breach">Нарушение</option>
                                <option value="shadowBan">Теневой бан</option>
                                <option value="ban">Бан</option>
                            </select>
                            <button type="submit" class="mt-3 text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Изменить</button>
                        </form> @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>