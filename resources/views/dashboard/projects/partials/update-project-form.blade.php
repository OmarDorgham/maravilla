<x-primary-button
    x-data=""
    x-on:click.prevent="$dispatch('open-modal', 'edit-project-{{ $project->id }}')"
    class="w-10 h-10 flex items-center justify-center p-0">
    <svg class="w-5 h-5" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10"></path>
    </svg>
</x-primary-button>

<x-modal name="edit-project-{{ $project->id }}" :show="$errors->any()" focusable>
    <form method="POST" action="{{ route('admin.projects.update', $project->id) }}" enctype="multipart/form-data" class="p-6">
        @csrf
        @method('PUT')

        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Edit Project: ') }} {{ $project->title }}
        </h2>

        <!-- Project Title -->
        <div class="mt-4">
            <x-input-label for="title-{{ $project->id }}" :value="__('Project Title')" />
            <x-text-input
                id="title-{{ $project->id }}"
                name="title"
                type="text"
                class="mt-1 block w-full"
                value="{{ old('title', $project->title) }}"
                required
            />
            <x-input-error :messages="$errors->get('title')" class="mt-2" />
        </div>

        <!-- Description -->
        <div class="mt-4">
            <x-input-label for="description-{{ $project->id }}" :value="__('Description')" />
            <textarea
                id="description-{{ $project->id }}"
                name="description"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"
                rows="4"
                required
            >{{ old('description', $project->description) }}</textarea>
            <x-input-error :messages="$errors->get('description')" class="mt-2" />
        </div>

        <!-- Current Image Preview -->
        @if($project->main_image)
            <div class="mt-4">
                <x-input-label :value="__('Current Image')" />
                <img src="{{ asset('storage/' . $project->main_image) }}" alt="{{ $project->title }}" class="h-16 w-16  object-cover rounded-md mt-2">
            </div>
        @endif

        <!-- Upload New Image -->
        <div class="mt-4">
            <x-input-label for="main_image-{{ $project->id }}" :value="__('Replace Image (optional)')" />
            <input
                id="main_image-{{ $project->id }}"
                name="main_image"
                type="file"
                class="mt-1 block w-full"
                accept="image/*"
            />
            <x-input-error :messages="$errors->get('main_image')" class="mt-2" />
        </div>

        <!-- Client Name -->
        <div class="mt-4">
            <x-input-label for="client_name-{{ $project->id }}" :value="__('Client Name')" />
            <x-text-input
                id="client_name-{{ $project->id }}"
                name="client_name"
                type="text"
                class="mt-1 block w-full"
                value="{{ old('client_name', $project->client_name) }}"
                required
            />
            <x-input-error :messages="$errors->get('client_name')" class="mt-2" />
        </div>

        <!-- Project Date -->
        <div class="mt-4">
            <x-input-label for="project_date-{{ $project->id }}" :value="__('Project Date')" />
            <x-text-input
                id="project_date-{{ $project->id }}"
                name="project_date"
                type="date"
                class="mt-1 block w-full"
                value="{{ old('project_date', $project->project_date?->format('Y-m-d')) }}"
                required
            />
            <x-input-error :messages="$errors->get('project_date')" class="mt-2" />
        </div>

        <!-- Featured Project -->
        <div class="mt-4 flex items-center">
            <input
                id="is_featured-{{ $project->id }}"
                name="is_featured"
                type="checkbox"
                class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                {{ old('is_featured', $project->is_featured) ? 'checked' : '' }}
            />
            <label for="is_featured-{{ $project->id }}" class="ml-2 block text-sm text-gray-900">
                {{ __('Mark as Featured') }}
            </label>
        </div>

        <!-- Buttons -->
        <div class="mt-6 flex justify-end">
            <x-secondary-button x-on:click="$dispatch('close')">
                {{ __('Cancel') }}
            </x-secondary-button>

            <x-primary-button class="ms-3">
                {{ __('Update Project') }}
            </x-primary-button>
        </div>
    </form>
</x-modal>
