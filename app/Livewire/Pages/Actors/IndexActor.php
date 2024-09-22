<?php

namespace App\Livewire\Pages\Actors;

use App\Models\Actor;
use Livewire\Component;

class IndexActor extends Component
{

    public $actors;

    public function mount()
    {
        $this->actors = Actor::all();
    }

    public function render()
    {
        return view('livewire.pages.actors.index')
            ->extends('livewire.layouts.dashboard')
            ->section('content');
    }
}
