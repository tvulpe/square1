<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 border-t border-gray-200 dark:border-gray-700 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form method="post" action="{{ route('post.create.insert') }}" class="mt-6 space-y-6">
                    @csrf
                    
                    <div>
                        <label class="block font-medium text-sm text-gray-700" for="title">Title</label>
                        <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" id="title" name="title" type="text" required="required" autofocus="autofocus">
                    </div>

                    <div>
                        <label class="block font-medium text-sm text-gray-700" for="description">Description (no text-editor)</label>
                        <textarea class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" id="description" name="description" type="text" required="required" rows="10"></textarea>
                    </div>

                    <div class="flex items-center gap-4">
                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">Publish</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
