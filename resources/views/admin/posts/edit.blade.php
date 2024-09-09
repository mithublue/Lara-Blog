<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Post') }}
        </h2>
    </x-slot>

    <div class="flex-1 lg:p-10">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
            <form action="{{ route('admin.posts.update', $post) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Title -->
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
                        {{ __('Title') }}
                    </label>
                    <input type="text" name="title" id="title" value="{{ old('title', $post->title) }}"
                           class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                           required>
                    @error('title')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Slug -->
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="slug">
                        {{ __('Slug') }}
                    </label>
                    <input type="text" name="slug" id="slug" value="{{ old('slug', $post->slug) }}"
                           class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @error('slug')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Content -->
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="content">
                        {{ __('Content') }}
                    </label>
                    <textarea name="content" id="content" rows="6"
                              class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                              required>{{ old('content', $post->content) }}</textarea>
                    @error('content')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Featured Image -->
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="featured_image">
                        {{ __('Featured Image') }}
                    </label>
                    <input type="file" name="featured_image" id="featured_image"
                           class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @error('featured_image')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Status -->
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="status">
                        {{ __('Status') }}
                    </label>
                    <select name="status" id="status"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        <option value="draft" {{ $post->status == 'draft' ? 'selected' : '' }}>{{ __('Draft') }}</option>
                        <option value="published" {{ $post->status == 'published' ? 'selected' : '' }}>{{ __('Published') }}</option>
                        <option value="archived" {{ $post->status == 'archived' ? 'selected' : '' }}>{{ __('Archived') }}</option>
                    </select>
                    @error('status')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Tags -->
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="tags">
                        {{ __('Tags') }}
                    </label>
                    <input type="text" name="tags" id="tags" value="{{ old('tags', $post->tags) }}"
                           class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @error('tags')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Submit Button -->
                <div class="flex items-center justify-between">
                    <button type="submit"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        {{ __('Update Post') }}
                    </button>

                    <a href="{{ route('admin.posts.index') }}"
                       class="text-gray-500 hover:text-gray-700">
                        {{ __('Cancel') }}
                    </a>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
