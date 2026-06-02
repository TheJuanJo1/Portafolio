<?php

namespace App\Livewire\Sections;

use Livewire\Component;

class Skills extends Component
{
    public function render()
    {
        return view('livewire.sections.skills', [
            'skills' => config('portfolio.skills'),
        ]);
    }
}
