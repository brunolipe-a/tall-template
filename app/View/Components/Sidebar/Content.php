<?php

namespace App\View\Components\Sidebar;

use Illuminate\View\Component;

class Content extends Component
{
  public $navItens;

  public function __construct()
  {
    $this->navItens = collect([
      [
        'title' => 'Dashboard',
        'url' => '/',
        'icon' => 'heroicon-o-home',
        'selected' => true,
      ],
      [
        'title' => 'Forms',
        'url' => '#',
        'icon' => 'heroicon-o-clipboard-list',
        'selected' => false,
      ],
      [
        'title' => 'Cards',
        'url' => '#',
        'icon' => 'heroicon-o-collection',
        'selected' => false,
      ],
      [
        'title' => 'Charts',
        'url' => '#',
        'icon' => 'heroicon-o-chart-pie',
        'selected' => false,
      ],
      [
        'title' => 'Buttons',
        'url' => '#',
        'icon' => 'heroicon-o-cursor-click',
        'selected' => false,
      ],
      [
        'title' => 'Modals',
        'url' => '#',
        'icon' => 'heroicon-o-duplicate',
        'selected' => false,
      ],
      [
        'title' => 'Tables',
        'url' => '#',
        'icon' => 'heroicon-o-view-list',
        'selected' => false,
      ],
      [
        'title' => 'Pages',
        'url' => '#',
        'icon' => 'heroicon-o-template',
        'selected' => false,
        'children' => ['Login'],
      ],
    ])->map(fn($i) => (object) $i);
  }

  public function render()
  {
    return view('components.sidebar.content');
  }
}
