<div class="py-12">
    <span class="px-4 ml-4 text-gray-500 text-md"><a href="/">Home</a> / {{$post->title}}</span>
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="mt-4">
            <div class="grid grid-flow-row auto-rows-max md:auto-rows-min">
                <div class="grid md:grid-cols-2">
                    <div class="flex flex-col p-4 py-8 my-2 mb-4 ml-2 overflow-hidden bg-white rounded-md shadow-lg">
                        <span class="ml-4 mr-2 text-xl font-bold"><h1>{{$post->title}}</h1></span>
                        <span class="ml-4 text-md">created by {{$post->user->name}}</span>
                        <span class="ml-4 text-sm text-gray-500"> {{$post->created_at->diffForHumans()}}</span>
                            {{-- <br/> --}}
                        <p class="mt-2 mb-2 ml-4 mr-2">{{$post->content}} </p>
                        <span class="mt-2 ml-4"><a href="/" class="btn-back"> Back</a></span>
                            {{-- <div class="">
                                <a href="/" class="btn-back"> Back</a>
                            </div> --}}

                    </div>
                    <div class="card-latest-post">
                        <div class="flex flex-col p-2 my-2 ml-2 mr-2 overflow-hidden bg-white rounded-md shadow-lg">
                            <span class="mt-2 mb-4 ml-4 text-xl font-bold"><h1>Latest Post</h1></span>
                            <ul class="list-none md:list-disc">
                                @foreach ($limit_post as $limit)
                                <li><span class="mt-4 ml-4 mr-2 text-sm"><a href="/{{$limit->id}}">{{$limit->title}}</a> - {{$limit->created_at->diffForHumans()}}</span></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col p-4 my-2 mb-4 ml-2 overflow-hidden border-2 rounded-md shadow-lg bg-grey-600">
                    <span class="mt-2 mb-4 ml-4 text-xl font-bold"><h1>Comments ({{count($comments)}})</h1></span>
                        @foreach ($comments as $comment)
                        <div class="flex flex-col p-4 my-2 mt-2 mb-2 ml-2 mr-2 overflow-hidden bg-white rounded-md">
                            <span class="mt-2 ml-4 text-md">{{$comment->coment_name}}</span>
                            <span class="ml-4 text-sm text-gray-500"> {{$comment->created_at->diffForHumans()}}</span>
                            <p class="mt-2 mb-4 ml-4 mr-2">{{$comment->comment}}</p>
                        </div>
                        @endforeach

                    <span class="mt-2 ml-4 text-xl font-bold"><h1>Leave Comment</h1></span>
                       <form wire:submit.prevent='savecomment'>
                           @csrf
                           <div class="overflow-hidden shadow sm:rounded-md">
                                <div class="px-4 py-4 bg-grey sm:p-6">
                                    <div class="grid grid-cols-6 gap-6">
                                        <div class="col-span-6 sm:col-span-3" hidden>
                                            <label for="post_id" class="block text-sm font-medium text-gray-700">Id Post</label>
                                            <input wire:model='post_id' type="text" name="post_id" id="post_id" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" value="{{$post->id}}">
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-6 gap-6">
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="comment_name" class="block text-sm font-medium text-gray-700">Name / Email (If this section not fill, System will set default name Anonymous)</label>
                                            <input wire:model='coment_name' type="text" name="comment_name" id="comment_name" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-lg">
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-6 gap-6 mt-1">
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="comment" class="block text-sm font-medium text-gray-700">Comment</label>
                                            <textarea wire:model='comment' type="text" name="comment" id="comment" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md"></textarea>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-6 gap-6 mt-2">
                                        <div class="col-span-6 sm:col-span-3">
                                            <button class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 color-button">Comment</button>
                                        </div>
                                    </div>
                                </div>
                           </div>
                       </form>
                </div>

            </div>
        </div>
    </div>

    {{-- Nothing in the world is as soft and yielding as water. --}}
</div>
