<?php

namespace App\Livewire\Department;

use App\Models\Department;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;

class Index extends Component
{
    #[Layout('layouts.app')]
    #[On('department-created')]
    public function render()
    {
        return view('livewire.department.index', [
            'departments' => Department::orderBy('name')->get(),
        ]);
    }
}
