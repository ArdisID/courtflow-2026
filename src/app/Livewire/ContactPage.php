<?php

namespace App\Livewire;

use App\Models\Contact;
use Livewire\Component;

class ContactPage extends Component
{
    public $name;
    public $email;
    public $subject;
    public $message;

    public function save()
    {
        $this->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'subject' => ['required'],
            'message' => ['required'],
        ]);

        Contact::create([
            'name' => $this->name,
            'email' => $this->email,
            'subject' => $this->subject,
            'message' => $this->message,
        ]);

        session()->flash(
            'success',
            'Pesan berhasil dikirim.'
        );

        $this->reset();
    }

    public function render()
    {
        return view('livewire.contact-page')
            ->layout('layouts.app');
    }
}