<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="mt-10 bg-black rounded-lg overflow-hidden shadow-lg">
        <a href="/about" class="group relative block">
            <img alt="" src="img/profile1.JPG"
                class="absolute inset-0 h-full w-full object-cover object-[100%_18%] opacity-75 transition-opacity group-hover:opacity-50" />

            <div class="relative p-4 sm:p-6 lg:p-8">
                <p class="text-sm font-medium tracking-widest text-[#1D503A] uppercase">Hello, I am</p>

                <p class="text-xl font-bold text-white sm:text-2xl">Devariza Putera Herawan</p>

                <div class="mt-32 sm:mt-48 lg:mt-64">
                    <div
                        class="translate-y-8 transform opacity-0 transition-all group-hover:translate-y-0 group-hover:opacity-100">
                        <p class="text-sm text-white">
                            Computer Science student who would love to take the opportunity to participate in web
                            development projects.
                        </p>
                        <p class="text-xs text-[#1D503A]">Click to see More</p>
                    </div>

                </div>
            </div>
    </div>

    <div class="mt-6 flex justify-center">
        <a class="group relative inline-flex items-center overflow-hidden rounded-sm bg-[#1D503A] px-8 py-3 text-white focus:ring-3 focus:outline-hidden"
            href="{{ asset('CVDevarizaPuteraHerawan.pdf') }}">
            <span class="absolute -end-full transition-all group-hover:end-4">
                <svg class="size-5 shadow-sm rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 20h16M12 4v12m0 0l-4-4m4 4l4-4" />
                </svg>

            </span>
            <i class="fa-solid fa-file mr-2"></i>
            <span class="text-sm font-medium transition-all group-hover:me-4"> Download CV</span>
        </a>
    </div>
    </section>

    <section class="mt-8 max-w-3xl mx-auto px-4 text-center">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Tech Stack</h2>
        <div class="flex justify-center flex-wrap gap-5 text-3xl text-gray-700">
            <i class="fa-brands fa-php"></i>
            <i class="fa-brands fa-laravel"></i>
            <i class="fa-brands fa-square-js"></i>
            <i class="fa-brands fa-react"></i>
            <i class="fa-brands fa-css3-alt"></i>
            <i class="fa-brands fa-node-js"></i>
            <i class="fa-brands fa-java"></i>
            <i class="fa-solid fa-database"></i>
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
