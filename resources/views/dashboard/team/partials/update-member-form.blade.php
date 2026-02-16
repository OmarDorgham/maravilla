{{-- Edit button (مثل المشروع) --}}
<x-primary-button
    x-data=""
    x-on:click.prevent="$dispatch('open-modal', 'edit-team-member-{{ $member->id }}')"
    class="w-10 h-10 flex items-center justify-center p-0">
    <svg class="w-5 h-5" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round"
              d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10"/>
    </svg>
</x-primary-button>

{{-- Modal + Form --}}
<x-modal name="edit-team-member-{{ $member->id }}" :show="$errors->any()" focusable>
    <form method="POST"
          action="{{ route('admin.team-members.update', $member->id) }}"
          class="p-6"
          enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Edit Team Member: ') }} {{ $member->name }}
        </h2>

        <!-- Name -->
        <div class="mt-4">
            <x-input-label for="name-{{ $member->id }}" :value="__('Name')" />
            <x-text-input
                id="name-{{ $member->id }}"
                name="name"
                type="text"
                value="{{ old('name', $member->name) }}"
                class="mt-1 block w-full"
                required
            />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Job Title -->
        <div class="mt-4">
            <x-input-label for="job_title-{{ $member->id }}" :value="__('Job Title')" />
            <x-text-input
                id="job_title-{{ $member->id }}"
                name="job_title"
                type="text"
                value="{{ old('job_title', $member->job_title) }}"
                class="mt-1 block w-full"
                required
            />
            <x-input-error :messages="$errors->get('job_title')" class="mt-2" />
        </div>

        <!-- Current Image Preview -->
        @if($member->image)
            <div class="mt-4">
                <x-input-label :value="__('Current Image')" />
                <img
                    src="{{ asset('storage/' . $member->image) }}"
                    alt="{{ $member->name }}"
                    class="h-16 w-16 object-cover rounded-md mt-2">
            </div>
        @endif

        <!-- Replace Image (optional) -->
        <div class="mt-4">
            <x-input-label for="image-{{ $member->id }}" :value="__('Replace Image (optional)')" />
            <input
                id="image-{{ $member->id }}"
                name="image"
                type="file"
                class="mt-1 block w-full"
                accept="image/*"
            />
            <x-input-error :messages="$errors->get('image')" class="mt-2" />
        </div>

        <!-- WhatsApp -->
        <div class="mt-4">
            <x-input-label for="whatsapp-{{ $member->id }}" :value="__('WhatsApp Link')" />
            <x-text-input
                id="whatsapp-{{ $member->id }}"
                name="whatsapp"
                type="url"
                value="{{ old('whatsapp', $member->whatsapp) }}"
                class="mt-1 block w-full"
                placeholder="{{ __('Enter WhatsApp URL') }}"
            />
            <x-input-error :messages="$errors->get('whatsapp')" class="mt-2" />
        </div>

        <!-- LinkedIn -->
        <div class="mt-4">
            <x-input-label for="linkedin-{{ $member->id }}" :value="__('LinkedIn Link')" />
            <x-text-input
                id="linkedin-{{ $member->id }}"
                name="linkedin"
                type="url"
                value="{{ old('linkedin', $member->linkedin) }}"
                class="mt-1 block w-full"
                placeholder="{{ __('Enter LinkedIn URL') }}"
            />
            <x-input-error :messages="$errors->get('linkedin')" class="mt-2" />
        </div>

        <!-- Instagram -->
        <div class="mt-4">
            <x-input-label for="instagram-{{ $member->id }}" :value="__('Instagram Link')" />
            <x-text-input
                id="instagram-{{ $member->id }}"
                name="instagram"
                type="url"
                value="{{ old('instagram', $member->instagram) }}"
                class="mt-1 block w-full"
                placeholder="{{ __('Enter Instagram URL') }}"
            />
            <x-input-error :messages="$errors->get('instagram')" class="mt-2" />
        </div>

        <!-- Behance -->
        <div class="mt-4">
            <x-input-label for="behance-{{ $member->id }}" :value="__('Behance Link')" />
            <x-text-input
                id="behance-{{ $member->id }}"
                name="behance"
                type="url"
                value="{{ old('behance', $member->behance) }}"
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
                {{ __('Update Team Member') }}
            </x-primary-button>
        </div>
    </form>
</x-modal>
