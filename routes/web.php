<?php

use App\Livewire\Dashboard\Index;
use App\Livewire\Pages\Actors\IndexActor;
use App\Livewire\Pages\Dashboard\IndexDashboard;
use Illuminate\Support\Facades\Route;

Route::get('/', IndexDashboard::class)->name('dashboard');

/* --- Actor --- */
Route::prefix('/actors')->name('actor.')->group(function () {
    Route::get('', IndexActor::class)->name('index');
});
