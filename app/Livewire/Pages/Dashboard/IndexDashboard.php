<?php

namespace App\Livewire\Pages\Dashboard;

use Livewire\Component;

class IndexDashboard extends Component
{
    public function render()
    {
        return view('livewire.pages.dashboard.index')
            ->extends('livewire.layouts.dashboard')
            ->section('content');
    }
}
