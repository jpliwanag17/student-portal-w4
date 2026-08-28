<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class Alert extends Component
{
    public function __construct(
        public string $type = 'info',
        public ?string $message = null,
    ) {}

    public function cssClass(): string
    {
        return match ($this->type) {
            'success' => 'alert-success',
            'danger'  => 'alert-danger',
            default   => 'alert-info',
        };
    }

    public function render(): View
    {
        return view('components.alert');
    }
}