<?php

namespace App\Livewire\Dealership;

use App\Models\DealerGroup;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.dealership.index', [
            'dealerships' => DealerGroup::query()
                ->orderBy('name')
                ->withCount('dealerships')
                ->get(),
        ]);
    }
}
