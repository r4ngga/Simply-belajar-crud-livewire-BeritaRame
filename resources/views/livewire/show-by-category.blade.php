<div>
    <div class="items-center">
        <div class=" px-4 ml-12 text-lg leading-7 font-semibold">
            Category :
            @foreach($post as $posts)
            {{$posts->category}}
            @break
            @endforeach
        </div>
     </div>
    <div class="mt-8 overflow-hidden sm:rounded-lg">
        <div class="grid md:grid-cols-2">
            <div class="grid-cols-1 bg-white dark:bg-gray-800 shadow-lg">
                @foreach($post as $posts)
                <div class="p-6">
                    <div class="flex items-center">
                        <div class="ml-12 text-lg leading-7 font-semibold">  {{$posts->title}} </div>
                    </div>
                    <div class="ml-12 text-md text-gray-700 dark:text-gray-600">created by {{$posts->user->name}}</div>
                        <div class="ml-12 text-sm text-gray-500 dark:text-gray-400">{{date('j F, Y', strtotime($posts->created_at))}} - {{$posts->created_at->diffForHumans()}}</div>
                        <div class="ml-12">
                            <div class="mt-2 text-lg">
                                {{ Str::limit($posts->content, 50)}} <a href="/{{$posts->id}}" class="underline">read more</a>
                            </div>
                        </div>
                </div>
                @endforeach
            </div>
                <div class="grid-cols-1">
                    <div class="grid-rows-2">
                        <div class="card-latest-post">
                            <div class="flex flex-col p-2 my-2 ml-2 mr-2 overflow-hidden bg-white rounded-md shadow-lg">
                                <span class="mt-2 mb-4 ml-4 text-xl font-bold"><h1>Latest Post</h1></span>
                                <ul class="list-none md:list-disc">
                                    @foreach($limit_post as $limit)
                                    <li><span class="mt-4 ml-4 mr-2 text-sm"><a href="/{{$limit->id}}">{{$limit->title}}</a> - {{$limit->created_at->diffForHumans()}}</span></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="grid-rows-2">
                        <div class="card-latest-post">
                            <div class="flex flex-col p-2 my-2 ml-2 mr-2 overflow-hidden bg-white rounded-md shadow-lg">
                            <span class="mt-2 mb-4 ml-4 text-xl font-bold"><h1>Category (Coming Soon)</h1></span>
                                <ul class="list-none md:list-disc">
                                    <li class="py-2"><span class="mt-4 ml-4 mr-2 text-sm"><a href="#">Political</a> </span></li>
                                    <li class="py-2"><span class="mt-4 ml-4 mr-2 text-sm"><a href="#">Geography</a> </span></li>
                                    <li class="py-2"><span class="mt-4 ml-4 mr-2 text-sm"><a href="#">Health</a> </span></li>
                                    <li class="py-2"><span class="mt-4 ml-4 mr-2 text-sm"><a href="#">Foods</a> </span></li>
                                    <li class="py-2"><span class="mt-4 ml-4 mr-2 text-sm"><a href="#">Sports</a> </span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="p-6">
                    <div class="flex items-center">
                        <div class="ml-12 text-lg leading-7 font-semibold">
                                {{-- {{$post->links('pagination::simple-tailwind')}} --}}
                        </div>
                    </div>
                </div>
        </div>
    </div>
    {{-- The best athlete wants his opponent at his best. --}}
</div>
