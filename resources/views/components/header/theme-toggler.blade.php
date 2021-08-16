<button class="rounded-md focus:outline-none focus:shadow-outline-purple" @click="toggleTheme"
  aria-label="Toggle color mode">
  <template x-if="!dark">
    <x-heroicon-s-moon class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" />
  </template>
  <template x-if="dark">
    <x-heroicon-s-sun class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" />
  </template>
</button>
