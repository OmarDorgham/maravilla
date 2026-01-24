<section class="space-y-12">
    <h2 class="text-lg font-medium text-gray-900 mb-4">
        {{ __('Company Projects') }}
    </h2>

    <div class="w-full overflow-x-auto shadow-sm border border-gray-200 rounded-lg">
        <table class="w-full text-left border-collapse">
            <thead class="bg-gray-50">
            <tr>
                <th class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider border-b border-gray-200">{{ __('#') }}</th>
                <th class="px-6 py-4 text-xs font-medium text-gray-500 uppercase tracking-wider border-b border-gray-200">{{ __('image') }}</th>
                <th class="px-6 py-4 text-xs font-medium text-gray-500 uppercase tracking-wider border-b border-gray-200">{{ __('name') }}</th>
                <th class="px-6 py-4 text-xs font-medium text-gray-500 uppercase tracking-wider border-b border-gray-200">{{ __('Title') }}</th>
                <th class="px-6 py-4 text-xs font-medium text-gray-500 uppercase tracking-wider border-b border-gray-200">{{ __('socials') }}</th>
{{--                <th class="px-6 py-4 text-xs font-medium text-gray-500 uppercase tracking-wider border-b border-gray-200">{{ __('whatsapp') }}</th>--}}
{{--                <th class="px-6 py-4 text-xs font-medium text-gray-500 uppercase tracking-wider border-b border-gray-200">{{ __('linkedin') }}</th>--}}
{{--                <th class="px-6 py-4 text-xs font-medium text-gray-500 uppercase tracking-wider border-b border-gray-200">{{ __('instagram') }}</th>--}}
{{--                <th class="px-6 py-4 text-xs font-medium text-gray-500 uppercase tracking-wider border-b border-gray-200">{{ __('behance') }}</th>--}}
                <th class="px-6 py-4 text-xs font-medium text-gray-500 uppercase tracking-wider border-b border-gray-200">{{ __('Actions') }}</th>
            </tr>
            </thead>

            <tbody class="bg-white divide-y divide-gray-200">
            @forelse($team??[] as $member)
                <tr class="hover:bg-gray-50">
                    <!-- Thumbnail -->
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                        {{$loop->iteration  }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                        @if($member->image)
                            <a data-fancybox="gallery" href="{{ asset('storage/' . $member->image) }}">
                                <img src="{{ asset('storage/' . $member->image) }}" alt="{{ $member->image }}"
                                     class="h-16 w-16 object-cover rounded-md">
                            </a>
                        @else
                            <span class="text-gray-400">-</span>
                        @endif
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                        {{$member->name}}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                        {{$member->job_title}}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                        <span class="uppercase font-bold">whatsapp: </span>
                        {{$member->whatsapp}}<br>
                        <span class="uppercase font-bold">linkedin: </span>
                        {{$member->linkedin}}<br>
                        <span class="uppercase font-bold">instagram: </span>
                        {{$member->instagram}}<br>
                        <span class="uppercase font-bold">behance: </span>
                        {{$member->behance}}
                    </td>
{{--                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">--}}
{{--                        {{$member->whatsapp}}--}}
{{--                    </td>--}}
{{--                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">--}}
{{--                        {{$member->linkedin}}--}}
{{--                    </td>--}}
{{--                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">--}}
{{--                        {{$member->instagram}}--}}
{{--                    </td>--}}
{{--                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">--}}
{{--                        {{$member->behance}}--}}
{{--                    </td>--}}

                    <!-- Actions -->
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">

                        -
                        {{--                        @include('dashboard.projects.partials.update-project-form')--}}
                        {{--                        @include('dashboard.projects.partials.delete-project-form')--}}
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center text-sm text-gray-500">
                        <div class="flex items-center justify-center h-32">
                            {{ __('No projects found.') }}
                        </div>
                    </td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
</section>
