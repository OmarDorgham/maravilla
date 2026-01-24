<section class="space-y-6">
    <x-primary-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'upload-image')">
        {{ __('Upload Image') }}
    </x-primary-button>

    <x-modal name="upload-image" :show="$errors->any()" focusable>

        <form method="POST"
              action="{{ route('admin.projects.images.store', $project->id) }}"
              enctype="multipart/form-data"
              class="p-6">
            <h2 class="text-lg font-medium text-gray-900">
                {{ __('Upload Image') }}
            </h2>
            @csrf

            <!-- Title عام لكل الصور (اختياري) -->
            <div class="mt-3">
                <label class="block text-sm font-medium mb-1">Image Title (Optional)</label>
                <input type="text"
                       name="title"
                       class="w-full border rounded px-3 py-2"
                       placeholder="Enter a title for all images">
            </div>

            <!-- اختيار عدة صور -->
            <div class="mt-3">
                <label class="block text-sm font-medium mb-1">Select Images</label>
                <input type="file"
                       name="images[]"
                       multiple
                       accept="image/*"
                       required
                       class="w-full border rounded px-3 py-2">
            </div>

            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Cancel') }}
                </x-secondary-button>

                <x-primary-button class="ms-3">
                    {{ __('Upload') }}
                </x-primary-button>
            </div>

        </form>
    </x-modal>
</section>
