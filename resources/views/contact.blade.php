<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="bg-gray py-24 sm:py-32 mt-10 flex flex-col items-center">
        <div class="mx-auto max-w-7xl px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-semibold text-gray-900">Contact Me!</h2>
            <div class="mt-20 flex flex-wrap justify-center gap-10 sm:gap-20">
                <a href="https://instagram.com/devarph"
                    class="group flex items-center space-x-3 text-2xl transition-transform duration-300 hover:scale-105 hover:text-pink-600">
                    <i
                        class="fa-brands fa-square-instagram text-2xl transition-colors duration-300 group-hover:text-pink-600"></i>
                    <span>Instagram</span>
                </a>
                <a href="https://www.linkedin.com/in/devarizaph/"
                    class="group flex items-center space-x-3 text-2xl transition-transform duration-300 hover:scale-105 hover:text-blue-600">
                    <i
                        class="fa-brands fa-linkedin text-2xl transition-colors duration-300 group-hover:text-blue-600"></i>
                    <span>LinkedIn</span>
                </a>
                <a href="https://github.com/heradph"
                    class="group flex items-center space-x-3 text-2xl transition-transform duration-300 hover:scale-105 hover:text-gray-800">
                    <i
                        class="fa-brands fa-square-github text-2xl transition-colors duration-300 group-hover:text-gray-800"></i>
                    <span>GitHub</span>
                </a>
                <a href="https://x.com/nepbk"
                    class="group flex items-center space-x-3 text-2xl transition-transform duration-300 hover:scale-105 hover:text-black">
                    <i
                        class="fa-brands fa-x-twitter text-2xl transition-colors duration-300 group-hover:text-black"></i>
                    <span>X</span>
                </a>
                <a href="https://api.whatsapp.com/send/?phone=6281584342505&text&type=phone_number&app_absent=0&wame_ctl=1"
                    class="group flex items-center space-x-3 text-2xl transition-transform duration-300 hover:scale-105 hover:text-green-600">
                    <i
                        class="fa-brands fa-whatsapp text-2xl transition-colors duration-300 group-hover:text-green-600"></i>
                    <span>WhatsApp</span>
                </a>
                <div
                    class="group flex space-x-3 items-center text-2xl transition-transform duration-300 hover:scale-105 hover:text-red-600">
                    <i
                        class="fa-solid fa-envelope text-2xl transition-colors duration-300 group-hover:text-red-600"></i>
                    <a href="mailto:devarizaph@gmail.com">Email</a>
                </div>
            </div>
        </div>
    </div>
</x-layout>
