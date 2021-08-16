@props(['item'])

<li x-data="{ item: {{ json_encode($item) }} }" class="relative px-6 py-3">
  @if($item->selected)
  <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
  @endif
  <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
    :class="{'text-gray-800': item.selected, 'dark:text-gray-100': item.selected}" href="{{ $item->url }}">
    <x-icon name="{{ $item->icon }}" class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
      stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" />
    <span class="ml-4">{{ $item->title }}</span>
  </a>
</li>
