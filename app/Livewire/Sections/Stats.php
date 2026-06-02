<?php

namespace App\Livewire\Sections;

use Livewire\Component;

class Stats extends Component
{
    public function render()
    {
        return view('livewire.sections.stats', [
            'stats' => config('portfolio.stats'),
        ]);
    }
}
