<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100"> @foreach ($arr as $ar) <div> <video width="800" controls="controls" class='rounded-xl'>
                            <source src="{{asset('video') . '/' . $ar->videoSRC}}" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                        </video>
                        <div class="flex mt-11">
                            <div class="">
                                <p class="mb-3 text-lg text-gray-500 md:text-xl dark:text-gray-400"><a>{{$ar->title}}</a>
                                <p class="mb-3 text-lg text-gray-500 md:text-xl dark:text-gray-400"><span>Описание:</span>{{$ar->description}}</p>
                                <p class="mb-3 text-lg text-gray-500 md:text-xl dark:text-gray-400">Пользователь:{{$name}}</p>
                                <p class="mb-3 text-lg text-gray-500 md:text-xl dark:text-gray-400">Категория:{{$category_name}}</p>
                                <p class="mb-3 text-lg text-gray-500 md:text-xl dark:text-gray-400">{{$time}}</p>
                            </div>
                            <div class="ml-9">
                                @if(Auth::check())
                                <form method="post" action="{{route('like')}}">
                                    @csrf
                                    <input type="text" value="{{$ar->id}}" name="id_like" hidden>
                                    <button type="submit" class="text-white bg-blue-700 hover:bg-purple-800 focus:outline-none focus:ring-4 focus:ring-purple-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Лайк</button> <span>{{$likes}}</span>
                                </form>
                                <form method='post' action="{{route('dislike')}}">
                                    @csrf
                                    <input type="text" value="{{$ar->id}}" hidden name="id_dislike">
                                    <button type="submit" class="text-white bg-blue-700 hover:bg-purple-800 focus:outline-none focus:ring-4 focus:ring-purple-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Дизлайк</button> <span>{{$dislike}}</span>
                                </form>
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <form method='post' action="{{route('comments')}}" class="flex flex-col">
                                @csrf
                                <input type="text" value="{{$ar->id}}" hidden name="video_id">
                                <span class="mb-3 text-lg text-gray-500 md:text-xl dark:text-gray-400">Оставьте комментарий</span>
                                <textarea name="text" required maxlength="255" class="peer h-full min-h-[100px] w-full resize-none rounded-[7px] border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 focus:border-2 focus:border-gray-900 focus:border-t-transparent focus:outline-0 disabled:resize-none disabled:border-0 disabled:bg-blue-gray-50 mt-5"></textarea> <button class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 w-1/4 mt-5">Добавить</button>
                            </form>
                        </div>
                        @endif
                        <div class="mb-24">
                            <span class="mb-3 text-lg text-gray-500 md:text-xl dark:text-gray-400">Комментарии к видео</span>
                            @foreach ($comments as $comment)
                            <div>
                                <div class="w-[800px] text-1xl break-words">
                                    <p class="mb-3 text-lg text-gray-500 md:text-xl dark:text-gray-400 mt-6">
                                        {{$comment->name}}:{{$comment->text}}
                                    </p>
                                </div>
                                @if (Auth::check())
                                @if ($comment->user_id == Auth::user()->id)
                                <div class="inline-flex">
                                    <div>
                                        <form method="post" action="{{route('editcomment')}}">
                                            @csrf <input type="text" value="{{$comment->id}}" name="editid" hidden>
                                            <input type="text" value="{{$comment->text}}" name="editcom">
                                            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Редактировать</button>
                                        </form>
                                        <form action="{{route('deletecomment')}}" method="post">
                                            @method('DELETE')
                                            @csrf
                                            <input type="text" value="{{$comment->id}}" name="editid" hidden>
                                            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Удалить</button>
                                        </form>
                                    </div>
                                </div>
                                @endif @endif
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>