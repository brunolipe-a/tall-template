@props(['item'])

<li x-data="{ open: false, item: {{ json_encode($item) }} }" class="relative px-6 py-3">
  @if($item->selected)
  <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
  @endif
  <button
    class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
    :class="{'text-gray-800': item.selected, 'dark:text-gray-100': item.selected}" @click="open = !open"
    aria-haspopup="true">
    <span class="inline-flex items-center">
      <x-icon name="{{ $item->icon }}" class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
        stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" />
      <span class="ml-4">{{ $item->title }}</span>
    </span>
    <x-heroicon-s-chevron-down class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" />
  </button>
  <ul x-show="open" x-transition:enter="transition-all ease-in-out duration-300"
    x-transition:enter-start="opacity-25 max-h-0" x-transition:enter-end="opacity-100 max-h-xl"
    x-transition:leave="transition-all ease-in-out duration-300" x-transition:leave-start="opacity-100 max-h-xl"
    x-transition:leave-end="opacity-0 max-h-0"
    class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900"
    aria-label="submenu">
    @foreach ($item->children as $child)
    <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
      <a class="w-full" href="pages/login.html">{{ $child }}</a>
    </li>
    @endforeach
  </ul>
</li>
