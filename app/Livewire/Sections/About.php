<?php

namespace App\Livewire\Sections;

use Livewire\Component;

class About extends Component
{
    public function render()
    {
        return view('livewire.sections.about', [
            'about' => config('portfolio.about'),
        ]);
    }
}
