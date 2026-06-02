<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;
use Livewire\Component;

class ContactForm extends Component
{
    #[Validate('required|string|min:2|max:100')]
    public string $name = '';

    #[Validate('required|email|max:255')]
    public string $email = '';

    #[Validate('required|string|min:3|max:150')]
    public string $subject = '';

    #[Validate('required|string|min:10|max:2000')]
    public string $message = '';

    public bool $submitted = false;

    public function submit(): void
    {
        $this->validate();

        // Preparado para futura integración de correo (Mail::to(...)->send(...))
        $this->submitted = true;
        $this->reset(['name', 'email', 'subject', 'message']);
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
