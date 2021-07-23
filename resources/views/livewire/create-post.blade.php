<div>
        <div>
            <div class="md:grid md:grid-cols-2 md:gap-6">
                <div class="mt-5 md:mt-0 md:col-span-2">

                      <div class="shadow sm:rounded-md sm:overflow-hidden">
                        <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                          <div class="grid grid-cols-3 gap-6">
                            <div class="col-span-3 sm:col-span-2">
                              <label for="company-website" class="block text-sm font-medium text-gray-700">
                                Title
                              </label>
                              <div class="mt-1 flex rounded-md shadow-sm">
                                <input wire:model='title' type="text" name="company-website" id="company-website" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="title content here">
                              </div>
                            </div>
                          </div>

                          <div>
                            <label for="about" class="block text-sm font-medium text-gray-700">
                              Content
                            </label>
                            <div class="mt-1">
                              <textarea wire:model='content' id="about" name="about" rows="4" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" placeholder="content here"></textarea>
                            </div>
                          </div>

                        </div>
                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                          <button wire:click='createPost' type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 color-button">
                            Insert
                          </button>
                        </div>
                      </div>

                  </div>
                </div>
              </div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
</div>
