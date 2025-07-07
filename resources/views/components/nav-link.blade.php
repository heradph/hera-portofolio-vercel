@props(['active' => false])

<a {{ $attributes }}
    class="{{ $active ? 'bg-[#FAF5EE] text-black' : 'text-gray-300 hover:bg-[#FAF5EE] hover:text-black' }} block w-full rounded-md px-3 py-2 text-sm font-medium"
    aria-current="{{ $active ? 'page' : false }}">{{ $slot }}</a>
