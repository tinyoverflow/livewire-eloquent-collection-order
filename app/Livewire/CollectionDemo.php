<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Collection;
use Livewire\Component;

class CollectionDemo extends Component
{
    public Collection $users;

    public function mount(): void
    {
        $this->users = User::orderBy('name')->get()->collect();
    }

    public function render()
    {
        return view('livewire.demo')->withTitle(self::class);
    }

    public function someAction(): void
    {
        // empty, does not need to fulfil any purpose for this demo
    }
}
