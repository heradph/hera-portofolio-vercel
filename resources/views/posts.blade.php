<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    @foreach ($posts as $post)
        
   
    <article class="py-8 max-w-screen-md border-b border-gray-300">
        <a class="hover:underline"href="/posts/{{ $post['slug'] }}">
            <h1 class="mb-2 text-3xl tracking-tighter font-bold text-gray-800">{{ $post['title'] }}</h1>
        </a>
        <div class="text-base text-gray-500">
            <a href="#">{{ $post['author'] }}</a> | 3 March 2025
        </div>
        <p class="my-4 font-light">{{ Str::limit($post['body'], 300) }} </p>
        <a class="font-medium text-blue-900 hover:underline"href="/posts/{{ $post['slug'] }}">Read More &raquo;</a>
    </article>
    @endforeach
</x-layout>