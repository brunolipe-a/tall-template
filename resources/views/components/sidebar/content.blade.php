<div class="py-4 text-gray-500 dark:text-gray-400">
  <a class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200" href="#">
    Windmill
  </a>
  <ul class="mt-6">
    @foreach ($navItens as $navItem)
    @if(empty($navItem->children))
    <x-sidebar.nav-item :item="$navItem" />
    @else
    <x-sidebar.nav-item-dropdown :item="$navItem" />
    @endif
    @endforeach
  </ul>
  {{-- <div class="px-6 my-6">
      <button
        class="flex items-center justify-between w-full px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
        Create account
        <span class="ml-2" aria-hidden="true">+</span>
      </button>
    </div> --}}
</div>
