<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.dashboard.index')
            ->extends('livewire.layouts.dashboard')
            ->section('content');
    }
}
