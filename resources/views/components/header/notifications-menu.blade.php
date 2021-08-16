<div x-data="{ isMenuOpen: false }" @click.outside="isMenuOpen = false">
  <button class="relative align-middle rounded-md focus:outline-none focus:shadow-outline-purple"
    @click="isMenuOpen = !isMenuOpen" @keyup.escape="isMenuOpen = false" aria-label="Notifications"
    aria-haspopup="true">
    <x-heroicon-s-bell class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" />
    <!-- Notification badge -->
    <span aria-hidden="true"
      class="absolute top-0 right-0 inline-block w-3 h-3 transform translate-x-1 -translate-y-1 bg-red-600 border-2 border-white rounded-full dark:border-gray-800"></span>
  </button>
  <ul x-show="isMenuOpen" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"
    class="absolute right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-white border border-gray-100 rounded-md shadow-md dark:text-gray-300 dark:border-gray-700 dark:bg-gray-700">
    @foreach (['Messages' => 13, 'Sales' => 2, 'Alerts' => 0] as $section => $value)
    <li class="flex">
      <a class="inline-flex items-center justify-between w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
        href="#">
        <span>{{ $section }}</span>
        <x-common.badge :value="$value" />
      </a>
    </li>
    @endforeach
  </ul>
</div>
