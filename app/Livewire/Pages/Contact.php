<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;

class Contact extends Component
{
    public $name = '';
    public $email = '';
    public $subject = '';
    public $message = '';
    public $success = '';

    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email',
        'subject' => 'required|min:5',
        'message' => 'required|min:10',
    ];

    public function sendMessage()
    {
        $this->validate();

        // Here you would typically send an email
        // Mail::to('your@email.com')->send(new ContactFormMail($this->all()));

        $this->reset(['name', 'email', 'subject', 'message']);
        $this->success = 'Thank you for your message. We\'ll get back to you soon!';
    }

    public function render()
    {
        return view('livewire.pages.contact');
    }
}
