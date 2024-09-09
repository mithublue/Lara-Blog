<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Post Details') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto py-10">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <h3 class="text-lg font-semibold">{{ $post->title }}</h3>
                <p>{{ $post->body }}</p>
                <p>Status: {{ $post->status }}</p>
                <p>Published At: {{ $post->published_at }}</p>
            </div>
        </div>
    </div>
</x-app-layout>
