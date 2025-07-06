<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <section class="py-18 relative">
        <div class="w-full max-w-screen-xl px-4 sm:px-6 lg:px-0 mx-auto">
            <div class="flex flex-col lg:flex-row items-center gap-8">
                <!-- KIRI: TEKS -->
                <div class="w-full lg:w-7/12 flex flex-col gap-4">
                    <div class="flex flex-col gap-4">
                        <h2 class="text-gray-900 text-3xl sm:text-4xl font-bold font-manrope text-left">
                            Devariza Putera Herawan
                        </h2>

                        <p class="text-gray-500 mb-2 text-base leading-relaxed text-justify">
                            I'm an undergraduate student majoring in Informatics at Universitas Pembangunan Nasional
                            Veteran Jakarta with a strong passion for Computer Science—especially web development. This
                            passion has driven me to actively explore and get involved in various projects, covering
                            both frontend and backend development, while also learning the full development workflow.
                        </p>

                        <p class="text-gray-500 mb-2 text-base leading-relaxed text-justify -mt-3">
                            Over the past 4 semesters, I’ve worked on several projects involving dynamic websites, API
                            integration, microservices architecture, UI/UX design, and even mobile app development. My
                            main focus is building systems that are not just functional, but also efficient,
                            well-structured, and easy to use.
                        </p>

                        <p class="text-gray-500 mb-2 text-base leading-relaxed text-justify -mt-3">
                            I have hands-on experience with various web development technologies, including PHP with
                            Laravel, JavaScript with Next.js, and building RESTful APIs using Express.js. I've also
                            created various Mobile Application with Java. With these
                            tools, I’ve built projects that emphasize clean code structure, good performance, and a
                            smooth user experience.
                        </p>

                        <p class="text-gray-500 mb-2 text-base leading-relaxed text-justify -mt-3">
                            I'm open to taking on different development roles—whether it’s as a Fullstack Developer,
                            Frontend or Backend Developer, Mobile Developer, or even UI/UX Designer. Outside of tech,
                            I’m also active in student organizations, which helps me sharpen my communication and
                            teamwork skills.
                        </p>
                    </div>
                    <div class="flex flex-wrap items-center gap-4 text-3xl mt-1">
                        <i class="fa-brands fa-php"></i>
                        <i class="fa-brands fa-laravel"></i>
                        <i class="fa-brands fa-square-js"></i>
                        <i class="fa-brands fa-react"></i>
                        <i class="fa-brands fa-css3-alt"></i>
                        <i class="fa-brands fa-node-js"></i>
                        <i class="fa-brands fa-java"></i>
                        <i class="fa-brands fa-docker"></i>
                        <i class="fa-brands fa-git-alt"></i>
                        <i class="fa-brands fa-figma"></i>
                        <i class="fa-solid fa-database"></i>
                    </div>
                </div>

                <div class="w-full lg:w-5/12 flex flex-col items-center gap-6">
                    <img src="img/profile1.JPG" alt="About Me"
                        class="mx-auto mt-8 h-120 rounded-3xl object-cover shadow-md" />

                    <a href="{{ asset('CVDevarizaPuteraHerawan.pdf') }}" download
                        class="px-6 py-3 bg-[#1D503A] text-white font-semibold rounded-lg shadow-md hover:bg-[#FAF5EE] hover:text-gray-700 transition">
                        <i class="fa-solid fa-file mr-2"></i>
                        Download CV
                    </a>
                </div>
            </div>
        </div>
    </section>
</x-layout>
