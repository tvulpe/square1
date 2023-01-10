<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <a href="{{ route('post.create.index') }}" class="ml-4 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">+ Add</a>

            @if (count($posts))
                @foreach($posts as $post)
                    <a href="{{ route('post.view', $post->id) }}">
                        <div class="p-2 m-4 border-t border-gray-200 dark:border-gray-700 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                            <div class="p-2 text-gray-900">
                                <b>{{ $post->title }}</b>
                                <span class="float-right text-gray-400 text-xs">{{ Carbon\Carbon::parse($post->publication_date)->format('d-m-Y') }}</span>
                            </div>
                            <div class="p-2 text-zinc-900">
                                <p class="truncate">{{ $post->description }}</p>
                            </div>
                        </div>
                    </a>
                @endforeach
            @else
                <div class="p-2 m-4 border-t border-gray-200 dark:border-gray-700 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-2 text-gray-900">
                        <span>You have no posts created yet.</span>
                    </div>
                </div>
            @endif
        </div>
    </div>
</x-app-layout>
