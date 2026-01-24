<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Projects') }}
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
                    <x-input-error class="mb-4" :messages="$errors->all()" />
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
                    <x-auth-session-status class="mb-4" :status="session('success')" />
                    <button
                        @click="show = false"
                        class="ml-4 font-bold hover:text-green-900">
                        &times;
                    </button>
                </div>
            @endif

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('dashboard.projects.partials.create-project-form')
                </div>
            </div>


            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="w-full">
                    @include('dashboard.projects.partials.projects-list')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
