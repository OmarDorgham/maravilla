<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Project') }} - {{$project->title}} - Images
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            @if ($errors->any())
                <div
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    class="p-4 rounded-md flex items-center justify-between shadow mb-4 bg-white"
                >
                    <x-input-error class="mb-4" :messages="$errors->all()"/>
                    <button
                        @click="show = false"
                        class="ml-4 font-bold hover:text-green-900">
                        &times;
                    </button>
                </div>
            @endif
            @if (session('success'))
                <div
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    class="p-4 rounded-md flex items-center justify-between shadow mb-4 bg-white"
                >
                    <x-auth-session-status class="mb-4" :status="session('success')"/>
                    <button
                        @click="show = false"
                        class="ml-4 font-bold hover:text-green-900">
                        &times;
                    </button>
                </div>
            @endif

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('projects.partials.images.create-image-form')
                </div>
            </div>


            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="w-full">
                    @include('projects.partials.images.images-list')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<script>
    function imageUploader() {
        return {
            images: [],

            handleFiles(files) {
                for (let file of files) {
                    this.images.push({
                        file: file,
                        url: URL.createObjectURL(file)
                    });
                }
                this.syncInput();
            },

            handleDrop(e) {
                this.handleFiles(e.dataTransfer.files);
            },

            remove(index) {
                this.images.splice(index, 1);
                this.syncInput();
            },

            syncInput() {
                const dt = new DataTransfer();
                this.images.forEach(img => dt.items.add(img.file));
                this.$refs.fileInput.files = dt.files;
            }
        }
    }
</script>

