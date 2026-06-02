<?php

namespace App\Livewire\Sections;

use Livewire\Component;

class Solutions extends Component
{
    public function render()
    {
        return view('livewire.sections.solutions', [
            'solutions' => config('portfolio.solutions'),
        ]);
    }
}
