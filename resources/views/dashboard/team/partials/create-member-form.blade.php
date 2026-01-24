<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Add Team Member') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('This will create a new team member and display them in your team list.') }}
        </p>
    </header>

    <x-primary-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'create-team-member')">
        {{ __('Add Team Member') }}
    </x-primary-button>

    <x-modal name="create-team-member" :show="$errors->any()" focusable>
        <form method="POST" action="{{ route('admin.team-members.store') }}" class="p-6" enctype="multipart/form-data">
            @csrf

            <h2 class="text-lg font-medium text-gray-900">
                {{ __('New Team Member Details') }}
            </h2>

            <!-- Name -->
            <div class="mt-4">
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input
                    id="name"
                    name="name"
                    type="text"
                    value="{{ old('name') }}"
                    class="mt-1 block w-full"
                    placeholder="{{ __('Enter name') }}"
                    required
                />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Job Title -->
            <div class="mt-4">
                <x-input-label for="job_title" :value="__('Job Title')" />
                <x-text-input
                    id="job_title"
                    name="job_title"
                    type="text"
                    value="{{ old('job_title') }}"
                    class="mt-1 block w-full"
                    placeholder="{{ __('Enter job title') }}"
                    required
                />
                <x-input-error :messages="$errors->get('job_title')" class="mt-2" />
            </div>

            <!-- Image -->
            <div class="mt-4">
                <x-input-label for="image" :value="__('Profile Image')" />
                <input
                    id="image"
                    name="image"
                    type="file"
                    class="mt-1 block w-full"
                    accept="image/*"
                    required
                />
                <x-input-error :messages="$errors->get('image')" class="mt-2" />
            </div>

            <!-- WhatsApp -->
            <div class="mt-4">
                <x-input-label for="whatsapp" :value="__('WhatsApp Link')" />
                <x-text-input
                    id="whatsapp"
                    name="whatsapp"
                    type="url"
                    value="{{ old('whatsapp') }}"
                    class="mt-1 block w-full"
                    placeholder="{{ __('Enter WhatsApp URL') }}"
                />
                <x-input-error :messages="$errors->get('whatsapp')" class="mt-2" />
            </div>

            <!-- LinkedIn -->
            <div class="mt-4">
                <x-input-label for="linkedin" :value="__('LinkedIn Link')" />
                <x-text-input
                    id="linkedin"
                    name="linkedin"
                    type="url"
                    value="{{ old('linkedin') }}"
                    class="mt-1 block w-full"
                    placeholder="{{ __('Enter LinkedIn URL') }}"
                />
                <x-input-error :messages="$errors->get('linkedin')" class="mt-2" />
            </div>

            <!-- Instagram -->
            <div class="mt-4">
                <x-input-label for="instagram" :value="__('Instagram Link')" />
                <x-text-input
                    id="instagram"
                    name="instagram"
                    type="url"
                    value="{{ old('instagram') }}"
                    class="mt-1 block w-full"
                    placeholder="{{ __('Enter Instagram URL') }}"
                />
                <x-input-error :messages="$errors->get('instagram')" class="mt-2" />
            </div>

            <!-- Behance -->
            <div class="mt-4">
                <x-input-label for="behance" :value="__('Behance Link')" />
                <x-text-input
                    id="behance"
                    name="behance"
                    type="url"
                    value="{{ old('behance') }}"
                    class="mt-1 block w-full"
                    placeholder="{{ __('Enter Behance URL') }}"
                />
                <x-input-error :messages="$errors->get('behance')" class="mt-2" />
            </div>

            <!-- Buttons -->
            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Cancel') }}
                </x-secondary-button>

                <x-primary-button class="ms-3">
                    {{ __('Add Team Member') }}
                </x-primary-button>
            </div>
        </form>
    </x-modal>
</section>
