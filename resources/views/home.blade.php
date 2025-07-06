<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="mt-10 bg-black rounded-lg overflow-hidden shadow-lg">
        <a href="/about" class="group relative block">
            <img alt="" src="img/profile1.JPG"
                class="absolute inset-0 h-full w-full object-cover object-[100%_18%] opacity-75 transition-opacity group-hover:opacity-50" />

            <div class="relative p-4 sm:p-6 lg:p-8">
                <p class="text-sm font-medium tracking-widest text-pink-500 uppercase">Hello, I am</p>

                <p class="text-xl font-bold text-white sm:text-2xl">Devariza Putera Herawan</p>

                <div class="mt-32 sm:mt-48 lg:mt-64">
                    <div
                        class="translate-y-8 transform opacity-0 transition-all group-hover:translate-y-0 group-hover:opacity-100">
                        <p class="text-sm text-white">
                            Computer Science student who would love to take the opportunity to participate in web
                            development projects.
                        </p>
                        <p class="text-xs text-pink-500">Click to see More</p>
                    </div>

                </div>
            </div>
    </div>
    <div class="mt-6 flex justify-center">
        <a href="{{ asset('CVDevarizaPuteraHerawan.pdf') }}" download
            class="inline-block px-6 py-3 bg-[#1D503A] text-white font-semibold rounded-lg shadow-md hover:bg-[#FAF5EE] hover:text-gray-700 transition">
            <i class="fa-solid fa-file mr-2"></i>
            Download CV
        </a>
    </div>
    </section>

    <section class="mt-8 max-w-3xl mx-auto px-4 text-center">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Tech Stack</h2>
        <div class="flex flex-wrap justify-center text-3xl text-gray-700">
            <div class="w-1/4 md:w-auto flex justify-center mb-4"><i class="fa-brands fa-php"></i></div>
            <div class="w-1/4 md:w-auto flex justify-center mb-4"><i class="fa-brands fa-laravel"></i></div>
            <div class="w-1/4 md:w-auto flex justify-center mb-4"><i class="fa-brands fa-square-js"></i></div>
            <div class="w-1/4 md:w-auto flex justify-center mb-4"><i class="fa-brands fa-react"></i></div>
            <div class="w-1/4 md:w-auto flex justify-center mb-4"><i class="fa-brands fa-css3-alt"></i></div>
            <div class="w-1/4 md:w-auto flex justify-center mb-4"><i class="fa-brands fa-node-js"></i></div>
            <div class="w-1/4 md:w-auto flex justify-center mb-4"><i class="fa-brands fa-java"></i></div>
            <div class="w-1/4 md:w-auto flex justify-center mb-4"><i class="fa-solid fa-database"></i></div>
        </div>
    </section>


    <section class="mt-8 max-w-xl mx-auto text-center text-gray-600 italic">
        "First, solve the problem. Then, write the code."
    </section>
    <section class=" max-w-xl mx-auto text-center text-gray-600 italic">
        – John Johnson
    </section>
    </a>
</x-layout>
