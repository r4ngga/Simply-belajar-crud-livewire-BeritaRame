<div class="mt-4">
    @foreach($posts as $post)
    @if($updateStateId !== $post->id)
    <div class="flex flex-col p-4 my-2 mb-4 overflow-hidden bg-white shadow-lg rounded-md">
        <span class="text-xl font-bold ml-4"><h1>{{$post->title}}</h1></span>
        <span class="text-md ml-4">created by {{$post->user->name}}</span>
        {{-- {{$post->user->name}} --}}
        <span class="text-gray-500 text-sm ml-4"> {{$post->created_at->diffForHumans()}}</span>
        <span class="text-gray-600 text-md font-bold ml-4">Category : {{$post->category}}</span>
        <p class="ml-4">{{$post->content}} </p>
        <br/>
        <div >
            <button
            wire:click='showUpdateForm({{$post->id}})'
             class="p-2 justify-items-center btn-edit color-button-edit ml-4 mb-4">Edit</button>
            <button
            onclick="return confirm('Are you sure delete?') || event.stopImmediatePropagation()"
            wire:click='deletePost({{$post->id}})'
             class="p-2 justify-items-center btn-delete color-button-delete ml-4 mb-4">Delete</button>
        </div>
    </div>
    @endif

    @if($updateStateId === $post->id)
    <div class="mb-4 mt-4">
    <div class="shadow sm:rounded-md sm:overflow-hidden">
        <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
            <label for="company-website" class="block text-lg font-medium text-gray-700">
               Edit
            </label>
          <div class="grid grid-cols-3 gap-6">
            <div class="col-span-3 sm:col-span-2">
              <label for="company-website" class="block text-sm font-medium text-gray-700">
                Title
              </label>
              <div class="mt-1 flex rounded-md shadow-sm">
                <input wire:model='title' type="text" name="company-website" id="company-website" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="">
              </div>
            </div>
          </div>

          <div>
            <label for="about" class="block text-sm font-medium text-gray-700">
              Content
            </label>
            <div class="mt-1">
              <textarea wire:model='content' id="about" name="about" rows="4" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" placeholder=""></textarea>
            </div>
          </div>

            <div>
                <label for="category" class="block text-sm font-medium text-gray-700">
                  Category
                </label>
                <div class="mt-1">
                <select wire:model='category' id="category" name="category" autocomplete="category" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                  <option>Political</option>
                  <option>Economy</option>
                  <option>Geography</option>
                  <option>Health</option>
                  <option>Foods</option>
                  <option>Sports</option>
                </select>
                </div>
            </div>

        </div>
        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
          <button wire:click='updatePost({{$post->id}})' type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 color-button">
            Save Changes
          </button>
        </div>
      </div>
    </div>
    @endif
    @endforeach
    <div class="p-6">
        <div class="flex items-center">
            <div class="ml-12 text-lg leading-7 font-semibold">
                     {{$posts->links()}}
            </div>
        </div>
    </div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
</div>
