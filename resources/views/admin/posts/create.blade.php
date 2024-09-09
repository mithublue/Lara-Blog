<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Post') }}
        </h2>
    </x-slot>

    <div class="flex-1 lg:p-10">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <form action="{{ route('admin.posts.store') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="title" class="block text-gray-700">Title</label>
                        <input type="text" id="title" name="title" class="mt-1 block w-full" required>
                    </div>

                    <div class="mb-4">
                        <label for="slug" class="block text-gray-700">Slug</label>
                        <input type="text" id="slug" name="slug" class="mt-1 block w-full" required>
                    </div>

                    <div class="mb-4">
                        <label for="body" class="block text-gray-700">Body</label>
                        <textarea id="body" name="body" class="mt-1 block w-full" rows="6" required></textarea>
                    </div>

                    <div class="mb-4">
                        <label for="status" class="block text-gray-700">Status</label>
                        <select id="status" name="status" class="mt-1 block w-full">
                            <option value="draft">Draft</option>
                            <option value="published">Published</option>
                            <option value="archived">Archived</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <label for="published_at" class="block text-gray-700">Published At</label>
                        <input type="datetime-local" id="published_at" name="published_at" class="mt-1 block w-full">
                    </div>

                    <div class="mb-4">
                        <label for="categories" class="block text-gray-700">Categories</label>
                        <select id="categories" name="categories[]" class="mt-1 block w-full" multiple>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-4">
                        <label for="tags" class="block text-gray-700">Tags</label>
                        <select id="tags" name="tags[]" class="mt-1 block w-full" multiple>
                            @foreach($tags as $tag)
                                <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <x-button>Save</x-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
