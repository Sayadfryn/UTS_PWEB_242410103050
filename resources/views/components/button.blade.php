@props(['type' => 'button', 'href' => '#', 'class' => ''])
@if($type === 'submit')
    <button {{ $attributes->merge(['type' => 'submit', 'class' => 'bg-orange-600 text-white px-6 py-2 rounded-full btn hover:bg-orange-700 ' . $class]) }}>
        {{ $slot }}
    </button>
@else
    <a {{ $attributes->merge(['href' => $href, 'class' => 'bg-orange-600 text-white px-6 py-2 rounded-full btn hover:bg-orange-700 ' . $class]) }}>
        {{ $slot }}
    </a>
@endif