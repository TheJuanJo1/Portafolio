<?php

use App\Livewire\PortfolioPage;
use Illuminate\Support\Facades\Route;

Route::get('/', PortfolioPage::class)->name('home');
