@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
<div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
  <x-cards.info-box label="Total clients" icon="heroicon-s-user-group" color="orange">
    6389
  </x-cards.info-box>
  <x-cards.info-box label="Pending contacts" icon="heroicon-s-cash" color="green">
    R$ 46.760,89
  </x-cards.info-box>
  <x-cards.info-box label="New sales" icon="heroicon-s-shopping-cart" color="blue">
    376
  </x-cards.info-box>
  <x-cards.info-box label="Pending contacts" icon="heroicon-s-chat-alt" color="teal">
    35
  </x-cards.info-box>
</div>

<h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
  Charts
</h2>

<div class="grid gap-6 mb-8 md:grid-cols-2">
  <x-charts.examples.donut />
  <x-charts.examples.line />
</div>
@endsection
