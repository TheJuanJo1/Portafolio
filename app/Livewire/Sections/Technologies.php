<?php

namespace App\Livewire\Sections;

use Livewire\Component;

class Technologies extends Component
{
    public function render()
    {
        return view('livewire.sections.technologies', [
            'groups' => config('portfolio.technologies'),
        ]);
    }
}
