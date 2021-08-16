<?php

namespace App\View\Components\Common;

use Illuminate\View\Component;

class Alert extends Component
{
  public string $color = '';
  public ?string $message = null;
  public string $icon;

  public function __construct()
  {
    foreach (
      [
        'success' => 'green',
        'info' => 'blue',
        'warning' => 'orange',
        'error' => 'red',
      ]
      as $status => $color
    ) {
      if (session()->has($status)) {
        $this->message = session()->get($status);
        $this->color = $color;
      }
    }

    $this->icon = match ($this->color) {
      'green' => 'heroicon-o-badge-check',
      'blue' => 'heroicon-o-information-circle',
      'orange' => 'heroicon-o-exclamation',
      'red' => 'heroicon-o-x-circle',
      default => 'heroicon-s-heart'
    };
  }

  public function render()
  {
    return view('components.common.alert');
  }
}
