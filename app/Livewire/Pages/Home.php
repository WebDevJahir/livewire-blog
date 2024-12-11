<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use Illuminate\Support\Facades\Log;

class Home extends Component
{
    public $email = '';
    public $message = '';
    public $activeTab = 'latest';

    public function setTab($tab)
    {
        $this->activeTab = $tab;
    }

    public function subscribe()
    {
        $this->validate([
            'email' => 'required|email'
        ]);

        Log::info('New newsletter subscription: ' . $this->email);

        $this->email = '';
        $this->message = 'Thanks for subscribing! Please check your email to confirm.';
    }

    public function render()
    {
        $posts = match($this->activeTab) {
            'popular' => 'Popular posts...',
            'trending' => 'Trending posts...',
            default => 'Latest posts...'
        };

        return view('livewire.pages.home', [
            'posts' => $posts
        ]);
    }
}
