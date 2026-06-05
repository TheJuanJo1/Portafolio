<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;
use Livewire\Component;
use Illuminate\Support\Facades\Mail;

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

        Mail::raw(
            "Nombre: {$this->name}\n" .
            "Correo: {$this->email}\n" .
            "Asunto: {$this->subject}\n\n" .
            "Mensaje:\n{$this->message}",
            function ($mail) {
                $mail->to('mbappejuan464@gmail.com')
                    ->subject('Nuevo mensaje desde el portafolio');
            }
        );

        $this->submitted = true;

        $this->reset([
            'name',
            'email',
            'subject',
            'message'
        ]);
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
