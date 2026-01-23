<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Create Project') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('This will create a new project and display it in your company profile\'s project list.') }}
        </p>
    </header>

    <x-primary-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'create-project')">
        {{ __('Create Project') }}
    </x-primary-button>

    <x-modal name="create-project" :show="$errors->any()" focusable>
        <form method="POST" action="{{ route('projects.store') }}" class="p-6" enctype="multipart/form-data">
            @csrf

            <h2 class="text-lg font-medium text-gray-900">
                {{ __('New Project Details') }}
            </h2>

            <!-- Project Title -->
            <div class="mt-4">
                <x-input-label for="title" :value="__('Project Title')" />
                <x-text-input
                    id="title"
                    name="title"
                    type="text"
                    value="{{old('title')}}"
                    class="mt-1 block w-full"
                    placeholder="{{ __('Enter project title') }}"
                    required
                />
                <x-input-error :messages="$errors->get('title')" class="mt-2" />
            </div>

            <!-- Description -->
            <div class="mt-4">
                <x-input-label for="description" :value="__('Description')" />
                <textarea
                    id="description"
                    name="description"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"
                    rows="4"
                    placeholder="{{ __('Enter project description') }}"
                    required
                >{{old('description')}}</textarea>
                <x-input-error :messages="$errors->get('description')" class="mt-2" />
            </div>

            <!-- Main Image -->
            <div class="mt-4">
                <x-input-label for="main_image" :value="__('Main Image')" />
                <input
                    id="main_image"
                    name="main_image"
                    type="file"
                    class="mt-1 block w-full"
                    accept="image/*"
                />
                <x-input-error :messages="$errors->get('main_image')" class="mt-2" />
            </div>

            <!-- Project Date -->
            <div class="mt-4">
                <x-input-label for="project_date" :value="__('Project Date')" />
                <x-text-input
                    id="project_date"
                    name="project_date"
                    type="date"
                    class="mt-1 block w-full"
                    value="{{ old('project_date') }}"
                    required
                />
                <x-input-error :messages="$errors->get('project_date')" class="mt-2" />
            </div>

            <!-- Client Name -->
            <div class="mt-4">
                <x-input-label for="client_name" :value="__('Client Name')" />
                <x-text-input
                    id="client_name"
                    name="client_name"
                    type="text"
                    class="mt-1 block w-full"
                    placeholder="{{ __('Enter client name') }}"
                    value="{{ old('client_name') }}"
                    required
                />
                <x-input-error :messages="$errors->get('client_name')" class="mt-2" />
            </div>

            <!-- Featured Project -->
            <div class="mt-4 flex items-center">
                <input
                    id="is_featured"
                    name="is_featured"
                    type="checkbox"
                    {{ old('is_featured') ? 'checked' : '' }}
                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                />
                <label for="is_featured" class="ml-2 block text-sm text-gray-900">
                    {{ __('Mark as Featured') }}
                </label>
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
