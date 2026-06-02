<?php

namespace App\Livewire\Sections;

use Livewire\Component;

class Projects extends Component
{
    public function render()
    {
        return view('livewire.sections.projects', [
            'projects' => config('portfolio.projects'),
        ]);
    }
}
