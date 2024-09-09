<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <div class="flex-1 lg:p-10">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <a href="{{ route('admin.posts.create') }}" class="px-4 py-2 bg-blue-500 text-white rounded">Add New Post</a>

                <table class="mt-4 w-full border-collapse">
                    <thead>
                    <tr>
                        <th class="px-4 py-2 border">Title</th>
                        <th class="px-4 py-2 border">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td class="px-4 py-2 border">{{ $post->title }}</td>
                            <td class="px-4 py-2 border">
                                <a href="{{ route('admin.posts.edit', $post) }}" class="text-blue-500">Edit</a>
                                <form action="{{ route('admin.posts.destroy', $post) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
