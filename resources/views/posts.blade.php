<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="mt-8 mx-auto max-w-screen-sm text-center lg:mb-8 mb-8">
        <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-900 ">All Blogs</h2>
    </div>
    <x-search></x-search>
    {{ $posts->links() }}
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:px-0">
        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
            @forelse ($posts as $post)
                <article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md  ">
                    <div class="flex justify-between items-center mb-5 text-gray-500">
                        <a href="/posts?category={{ $post->category->slug }}">
                            <span
                                class="bg-{{ $post->category->color }}-100 text-blue-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded">
                                <svg class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z">
                                    </path>
                                </svg>
                                {{ $post->category->name }}
                            </span>
                        </a>
                        <span class="text-sm">{{ $post->created_at->diffForHumans() }}</span>
                    </div>
                    <h2 class="mb-2 text-2xl font-bold tracking-tight hover:underline text-gray-900 "><a
                            href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h2>
                    <p class="mb-5 font-light text-gray-500 ">{{ Str::limit($post->body) }}</p>
                    <div class="flex justify-between items-center space-x-4">
                        <a href="/posts?author={{ $post->author->username }}">
                            <div class="flex items-center space-x-3">
                                <img class="w-6 h-6 rounded-full"
                                    src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png"
                                    alt="Jese Leos avatar" />
                                <span class="text-sm font-medium">
                                    {{ $post->author->name }}
                                </span>
                            </div>
                        </a>
                        <a class="group relative inline-flex whitespace-nowrap text-sm font-medium items-center overflow-hidden rounded-sm bg-[#1D503A] px-8 py-3 text-white focus:ring-3 focus:outline-hidden"
                            href="/posts/{{ $post['slug'] }}">
                            <span class="absolute -end-full transition-all group-hover:end-4">
                                <svg class="size-5 shadow-sm rtl:rotate-180" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                </svg>
                            </span>
                            <span class="text-sm font-medium transition-all group-hover:me-4"> Read More </span>
                        </a>
                    </div>
                </article>
            @empty
                <div class="flex flex-col items-center justify-center col-span-full">
                    <p class="font-bold text-4xl my-4">Article not Found!</p>
                    <a href="/posts" class="text-blue-900">&laquo Back to All Posts</a>
                </div>
            @endforelse
        </div>
    </div>

</x-layout>
