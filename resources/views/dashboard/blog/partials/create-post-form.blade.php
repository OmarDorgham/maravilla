<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Create Post') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('This will publish a new post and display it on your website blog.') }}
        </p>
    </header>

    <x-primary-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'create-project')">
        {{ __('Create Post') }}
    </x-primary-button>

    <x-modal name="create-project" :show="$errors->any()" focusable>
        <form method="POST" action="{{ route('admin.blog.store') }}" class="p-6" enctype="multipart/form-data">
            @csrf

            <h2 class="text-lg font-medium text-gray-900">
                {{ __('New Post Details') }}
            </h2>

            <!-- Project Title -->
            <div class="mt-4">
                <x-input-label for="title" :value="__('Post Title')"/>
                <x-text-input
                    id="title"
                    name="title"
                    type="text"
                    value="{{old('title')}}"
                    class="mt-1 block w-full"
                    placeholder="{{ __('Enter Post title') }}"
                    required
                />
                <x-input-error :messages="$errors->get('title')" class="mt-2"/>
            </div>

            <!-- Content -->
            <div class="mt-4">
                <x-input-label for="content" :value="__('Content')"/>
                <textarea
                    id="content"
                    name="content"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"
                    rows="10"
                    placeholder="{{ __('Enter project content') }}"
                >{{old('content')}}</textarea>
                <x-input-error :messages="$errors->get('content')" class="mt-2"/>
            </div>

            <!-- Main Image -->
            <div class="mt-4">
                <x-input-label for="featured_image" :value="__('Image')"/>
                <input
                    id="featured_image"
                    name="featured_image"
                    type="file"
                    class="mt-1 block w-full"
                    accept="image/*"
                />
                <x-input-error :messages="$errors->get('featured_image')" class="mt-2"/>
            </div>

            <!-- Post Date -->
            <div class="mt-4">
                <x-input-label for="published_at" :value="__('Published Date')"/>
                <x-text-input
                    id="published_at"
                    name="published_at"
                    type="date"
                    class="mt-1 block w-full"
                    value="{{ old('published_at') }}"
                    required
                />
                <x-input-error :messages="$errors->get('published_at')" class="mt-2"/>
            </div>


            <!-- Buttons -->
            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Cancel') }}
                </x-secondary-button>

                <x-primary-button class="ms-3">
                    {{ __('Create Project') }}
                </x-primary-button>
            </div>
        </form>
    </x-modal>
</section>
