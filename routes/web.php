<?php

use App\Livewire\Dashboard\Index;
use App\Livewire\Pages\Dashboard\IndexDashboard;
use Illuminate\Support\Facades\Route;

Route::get('/', IndexDashboard::class)->name('dashboard');
