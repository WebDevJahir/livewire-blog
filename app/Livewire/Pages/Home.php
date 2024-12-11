<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class Home extends Component
{
    public $message = 'Hello from Livewire!';

    public function mount()
    {
        // This will run when the component is mounted
        \Log::info('Home component mounted');
    }

    public function render()
    {
        return view('livewire.pages.home')
            ->layout('components.layouts.app');
    }
}
