@props(['menu' => [
['label' => 'Profile', 'url' => '#', 'icon' => 'heroicon-o-user'],
['label' => 'Settings', 'url' => '#', 'icon' => 'heroicon-o-cog'],
['label' => 'Log out', 'url' => '#', 'icon' => 'heroicon-o-login'],
]])

<div x-data="{ isMenuOpen: false }" @click.outside="isMenuOpen = false" @keyup.escape="isMenuOpen = false">
  <button class="align-middle rounded-full focus:shadow-outline-purple focus:outline-none"
    @click="isMenuOpen = !isMenuOpen" aria-label="Account" aria-haspopup="true">
    <img class="object-cover w-8 h-8 rounded-full"
      src="https://images.unsplash.com/photo-1502378735452-bc7d86632805?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&s=aa3a807e1bbdfd4364d1f449eaa96d82"
      alt="" aria-hidden="true" />
  </button>
  <ul x-show="isMenuOpen" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"
    class="absolute right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-white border border-gray-100 rounded-md shadow-md dark:border-gray-700 dark:text-gray-300 dark:bg-gray-700"
    aria-label="submenu">
    @foreach ($menu as $item)
    <li class="flex">
      <a class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
        href="{{ $item['url'] }}">
        <x-icon :name="$item['icon']" class="w-4 h-4 mr-3" aria-hidden="true" fill="none" stroke-linecap="round"
          stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" />
        <span>{{ $item['label'] }}</span>
      </a>
    </li>
    @endforeach
  </ul>
</div>
