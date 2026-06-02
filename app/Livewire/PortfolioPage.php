<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.portfolio')]
#[Title('Juan Moreno | Desarrollador Full Stack')]
class PortfolioPage extends Component
{
    public function render()
    {
        return view('livewire.portfolio-page');
    }
}
