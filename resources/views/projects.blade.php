<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="bg-gray-100 py-10">
        <div class="mx-auto max-w-2xl px-4 sm:px-6 lg:max-w-7xl lg:px-8">
            <h2 class="text-3xl lg:text-4xl font-bold tracking-tight text-gray-900 mb-10 text-center">My Projects</h2>
            <div class="grid grid-cols-1 gap-10 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($projects as $project)
                    <div
                        class="group bg-white rounded-xl shadow-md hover:shadow-lg transition p-4 flex flex-col justify-between h-full">
                        <a href="/projects/{{ $project->slug }}">
                            <img src="{{ asset($project->thumbnail) }}" alt="{{ $project->title }}" loading="eager"
                                class="aspect-[4/3] w-full rounded-md bg-gray-200 object-contain group-hover:opacity-80 transition">
                        </a>

                        <div class="flex flex-col flex-1 mt-4">
                            <h3 class="text-lg font-semibold text-gray-800">
                                <a href="/projects/{{ $project->slug }}">{{ $project->title }}</a>
                            </h3>

                            <p class="text-sm text-gray-600 mt-2 line-clamp-3">
                                {{ $project->description }}
                            </p>

                            <div class="flex-grow"></div>

                            <div class="flex flex-wrap gap-3 text-xl text-gray-700 mt-4">
                                @foreach ($project->technologies as $tech)
                                    <i class="{{ $tech->item_class }}" title="{{ $tech->name }}"></i>
                                @endforeach
                            </div>

                            <div class="flex items-center justify-between text-sm mt-4 pt-3 border-t">
                                <a href="/projects/{{ $project->slug }}"
                                    class="inline-block px-4 py-2 bg-[#1D503A] text-white font-medium text-sm rounded-md shadow hover:bg-[#FAF5EE] hover:text-gray-700 transition">
                                    See More
                                </a>
                                <span class="text-gray-400">{{ $project->created_at->diffForHumans() }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-layout>
