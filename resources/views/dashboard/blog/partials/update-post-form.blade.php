{{-- Edit button (قلم) --}}
<x-primary-button
    x-data=""
    x-on:click.prevent="$dispatch('open-modal', 'edit-post-{{ $post->id }}')"
    class="w-10 h-10 flex items-center justify-center p-0">
    <svg class="w-5 h-5" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round"
              d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10"/>
    </svg>
</x-primary-button>

{{-- Edit modal --}}
<x-modal name="edit-post-{{ $post->id }}" :show="$errors->any()" focusable>
    <form method="POST"
          action="{{ route('admin.blog.update', $post) }}"
          class="p-6"
          enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Edit Post: ') }} {{ $post->title }}
        </h2>

        <!-- Post Title -->
        <div class="mt-4">
            <x-input-label for="title-{{ $post->id }}" :value="__('Post Title')" />
            <x-text-input
                id="title-{{ $post->id }}"
                name="title"
                type="text"
                value="{{ old('title', $post->title) }}"
                class="mt-1 block w-full"
                required
            />
            <x-input-error :messages="$errors->get('title')" class="mt-2" />
        </div>

        <!-- Content -->
        <div class="mt-4">
            <x-input-label for="content-{{ $post->id }}" :value="__('Content')" />
            <textarea
                id="content-{{ $post->id }}"
                name="content"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"
                rows="10"
                placeholder="{{ __('Enter post content') }}"
            >{{ old('content', $post->content) }}</textarea>
            <x-input-error :messages="$errors->get('content')" class="mt-2" />
        </div>

        <!-- Current Image Preview -->
        @if($post->featured_image)
            <div class="mt-4">
                <x-input-label :value="__('Current Image')" />
                <img
                    src="{{ asset('storage/' . $post->featured_image) }}"
                    alt="{{ $post->title }}"
                    class="h-16 w-16 object-cover rounded-md mt-2">
            </div>
        @endif

        <!-- Replace Image (optional) -->
        <div class="mt-4">
            <x-input-label for="featured_image-{{ $post->id }}" :value="__('Replace Image (optional)')" />
            <input
                id="featured_image-{{ $post->id }}"
                name="featured_image"
                type="file"
                class="mt-1 block w-full"
                accept="image/*"
            />
            <x-input-error :messages="$errors->get('featured_image')" class="mt-2" />
        </div>

        <!-- Published Date -->
        <div class="mt-4">
            <x-input-label for="published_at-{{ $post->id }}" :value="__('Published Date')" />
            <x-text-input
                id="published_at-{{ $post->id }}"
                name="published_at"
                type="date"
                class="mt-1 block w-full"
                value="{{ old('published_at', optional($post->published_at)->format('Y-m-d')) }}"
                required
            />
            <x-input-error :messages="$errors->get('published_at')" class="mt-2" />
        </div>

        <!-- Buttons -->
        <div class="mt-6 flex justify-end">
            <x-secondary-button x-on:click="$dispatch('close')">
                {{ __('Cancel') }}
            </x-secondary-button>

            <x-primary-button class="ms-3">
                {{ __('Update Post') }}
            </x-primary-button>
        </div>
    </form>
</x-modal>
