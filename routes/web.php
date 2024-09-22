<?php

use App\Livewire\Dashboard\Index;
use App\Livewire\Layouts\Dashboard;
use Illuminate\Support\Facades\Route;

Route::get('/', Index::class)->name('dashboard');
