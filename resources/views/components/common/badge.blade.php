@props(['value', 'color' => 'purple'])

<span
  class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-{{ $color }}-600 bg-{{ $color }}-100 rounded-full dark:text-{{ $color }}-100 dark:bg-{{ $color }}-600">
  {{ $value }}
</span>
