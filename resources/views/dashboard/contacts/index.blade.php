<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contacts') }}
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
                <div class="w-full">
                    <div
                        class="relative overflow-x-auto bg-neutral-primary-soft shadow-xs rounded-lg border border-default">
                        <table class="w-full text-sm  text-body">
                            <thead class="bg-gray-50">
                            <tr>
                                <th class="w-1 px-6 py-4 text-xs font-medium text-gray-500 uppercase tracking-wider border-b border-gray-200">{{ __('#') }}</th>
                                <th class=" px-6 py-4 text-xs font-medium text-gray-500 uppercase tracking-wider border-b border-gray-200">{{ __('Name') }}</th>
                                <th class=" px-6 py-4 text-xs font-medium text-gray-500 uppercase tracking-wider border-b border-gray-200">{{ __('Email') }}</th>
                                <th class="px-6 py-4 text-xs text-left font-medium text-gray-500 uppercase tracking-wider border-b border-gray-200">{{ __('Message') }}</th>
                            </tr>
                            </thead>

                            <tbody class="bg-white divide-y divide-gray-200">
                            @forelse($contacts??[] as $contact)
                                <tr class="hover:bg-gray-50">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        {{$loop->iteration  }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        {{$contact->name}}
                                    </td>

                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 ">
                                        {{$contact->email}}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        {{$contact->message}}
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class=" text-sm text-gray-500">
                                        <div class="flex items-center justify-center h-32">
                                            {{ __('No contracts found.') }}
                                        </div>
                                    </td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-2">
                        {!! $contacts->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
