<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <article class="py-8 max-w-screen-md">
        <h1 class="mb-2 text-3xl tracking-tighter font-bold text-gray-800">{{ $post['title'] }}</h1>
        <div class="text-base text-gray-500">
            <a href="#">{{ $post['author'] }}</a> | 3 March 2025
            
        </div>
        <p class="my-4 font-light">{{ $post['body'] }} </p>
        <a class="font-medium text-blue-900 hover:underline"href="/posts">&laquo;Back to Posts</a>
    </article>
</x-layout>
