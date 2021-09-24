<div>
    <div class="mt-8 overflow-hidden sm:rounded-lg">
        <div class="grid md:grid-cols-2">
            <div class="grid-cols-1 bg-white dark:bg-gray-800 shadow-lg">
                    @foreach($posts as $post)
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="ml-12 text-lg leading-7 font-semibold">{{$post->title}}</div>
                        </div>
                        <div class="ml-12 text-md text-gray-700 dark:text-gray-600">created by {{$post->user->name}}</div>
                        <div class="ml-12 text-sm text-gray-500 dark:text-gray-400">{{$post->created_at}} - {{$post->created_at->diffForHumans()}}</div>
                        <div class="ml-12">
                            <div class="mt-2 text-lg">
                                {{ Str::limit($post->content, 50)}} <a href="/{{$post->id}}" class="underline">read more</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="grid-cols-1">
                <div class="card-latest-post">
                    <div class="flex flex-col p-2 my-2 ml-2 mr-2 overflow-hidden bg-white rounded-md shadow-lg">
                        <span class="mt-2 mb-4 ml-4 text-xl font-bold"><h1>Latest Post</h1></span>
                        <ul class="list-none md:list-disc">
                            @foreach($limit_posts as $limit)
                            <li><span class="mt-4 ml-4 mr-2 text-sm"><a href="/{{$limit->id}}">{{$limit->title}}</a> - {{$limit->created_at->diffForHumans()}}</span></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>


            <div class="p-6">
                <div class="flex items-center">
                    <div class="ml-12 text-lg leading-7 font-semibold">
                        {{$posts->links('pagination::simple-tailwind')}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
</div>
