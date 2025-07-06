<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="text-l font-bold text-gray-800">
        <a href="/projects">&laquo Back to All Projects</a>
    </div>

    <section class="bg-gray-100 py-12">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-800">{{ $project->title }}</h2>
                <p class="mt-2 text-gray-600 max-w-3xl mx-auto">{{ $project->description }}</p>
                <p class="text-sm text-gray-500 mt-1">{{ $project->created_at->diffForHumans() }}</p>
            </div>

            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center">
                @if ($project->technologies->isNotEmpty())
                    <div class="flex flex-col mb-4 sm:mb-0">
                        <span class="text-lg font-semibold text-gray-800 mb-2">Tech Used:</span>
                        <div class="flex flex-wrap gap-4 text-2xl text-gray-700">
                            @foreach ($project->technologies as $tech)
                                <i class="{{ $tech->item_class }}" title="{{ $tech->name }}"></i>
                            @endforeach
                        </div>
                    </div>
                @endif

                <div class="flex items-center gap-6 text-sm">
                    <a href="{{ $project->github }}" target="_blank"
                        class="flex items-center gap-2 text-gray-700 hover:text-black transition">
                        <i class="fa-brands fa-github text-lg"></i> Source Code
                    </a>
                </div>
            </div>

            <div class="mt-10">
                <h3 class="text-xl font-semibold text-gray-700 mb-4">Pages</h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    @foreach ($project->images as $image)
                        <div
                            class="w-full h-auto max-h-96 bg-gray-100 flex items-center justify-center overflow-hidden rounded-2xl shadow">
                            <img src="{{ asset($image->image) }}" alt="Landing Page {{ $project->title }}"
                                class="object-contain max-h-96 w-full">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</x-layout>
