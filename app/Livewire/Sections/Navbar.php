<?php

namespace App\Livewire\Sections;

use Livewire\Component;

class Navbar extends Component
{
    public bool $mobileOpen = false;

    public function toggleMobile(): void
    {
        $this->mobileOpen = ! $this->mobileOpen;
    }

    public function closeMobile(): void
    {
        $this->mobileOpen = false;
    }

    public function render()
    {
        return view('livewire.sections.navbar', [
            'nav' => config('portfolio.nav'),
            'name' => config('portfolio.name'),
        ]);
    }
}
