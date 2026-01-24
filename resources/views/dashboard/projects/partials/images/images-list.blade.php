<section class="space-y-12">
    <h2 class="text-lg font-medium text-gray-900 mb-4">
        {{ __('Company Projects') }}
    </h2>

    <div class="relative overflow-x-auto bg-neutral-primary-soft shadow-xs rounded-lg border border-default">
        <table class="w-full text-sm text-center text-body">
            <thead class="bg-gray-50">
            <tr>
                <th class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider border-b border-gray-200">{{ __('Thumbnail') }}</th>
                <th class="px-6 py-4 text-xs font-medium text-gray-500 uppercase tracking-wider border-b border-gray-200">{{ __('Title') }}</th>
                <th class="px-6 py-4 text-xs font-medium text-gray-500 uppercase tracking-wider border-b border-gray-200">{{ __('Actions') }}</th>
            </tr>
            </thead>

            <tbody class="bg-white divide-y divide-gray-200">
            @forelse($project->images as $image)
                <tr class="hover:bg-gray-50">
                    <!-- Thumbnail -->
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                        @if($image->image)
                            <a data-fancybox="gallery" href="{{ asset('storage/' . $image->image) }}">
                                <img src="{{ asset('storage/' . $image->image) }}"
                                     alt="{{ $image->title ?? $project->title }}"
                                     class="h-16 w-16 object-cover rounded-md">
                            </a>
                        @else
                            <span class="text-gray-400">-</span>
                        @endif
                    </td>

                    <!-- Title -->
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                        <a href="{{route('admin.projects.show',$project->id)}}">
                            {{ $project->title }}
                        </a>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                        @include('dashboard.projects.partials.images.delete-image-form')
                    </td><!-- Actions -->

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
