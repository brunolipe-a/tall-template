@if($message)
<div x-data="{ showAlert: true }" x-show="showAlert"
  class="flex flex-col p-4 mb-8 text-sm font-semibold text-{{ $color }}-100 bg-{{ $color }}-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-{{ $color }}">
  <div class="flex items-center justify-between">
    <div class="flex items-center">
      <x-icon :name="$icon" class="w-6 h-6 mr-2" />
      <span>{{ $message }}</span>
    </div>
    <button @click="showAlert = false">
      <x-heroicon-s-x class="w-4 h-4 mr-2" />
    </button>
  </div>
</div>
@endif

@if($errors->any())
<div x-data="{ showAlert: true }" x-show="showAlert" x-transition:leave="transition ease-in duration-150"
  x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
  class="flex flex-col p-4 mb-8 text-sm font-semibold text-red-100 bg-red-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-red">
  <div class="flex items-center justify-between">
    <div class="flex items-center">
      <x-icon name="heroicon-o-exclamation-circle" class="w-6 h-6 mr-2" />
      <span class="text-md">{{ __('validation.message') }}</span>
    </div>
    <button @click="showAlert = false">
      <x-heroicon-s-x class="w-4 h-4 mr-2" />
    </button>
  </div>
  <ul class="mt-3">
    @foreach($errors->all() as $error)
    <li><span>{{ $error }}</span></li>
    @endforeach
  </ul>
</div>
@endif
