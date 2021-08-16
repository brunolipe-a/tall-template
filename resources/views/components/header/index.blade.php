<header class="z-10 py-4 bg-white shadow-md dark:bg-gray-800">
  <div class="container flex items-center justify-between h-full px-6 mx-auto text-purple-600 dark:text-purple-300">
    <!-- Mobile hamburger -->
    <x-header.hamburger-button />
    <!-- Search input -->
    <x-header.search-input />
    <ul class="flex items-center flex-shrink-0 space-x-6">
      <!-- Theme toggler -->
      <li class="flex">
        <x-header.theme-toggler />
      </li>
      <!-- Notifications menu -->
      <li class="relative">
        <x-header.notifications-menu />
      </li>
      <!-- Profile menu -->
      <li class="relative">
        <x-header.profile-menu />
      </li>
    </ul>
  </div>
</header>
