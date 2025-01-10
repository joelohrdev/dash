<?php

namespace App\Livewire\Department;

use App\Models\Department;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;

class Index extends Component
{
    #[Layout('layouts.app')]
    #[On('department-created')]
    #[On('department-updated')]
    #[On('department-deleted')]
    public function render(): View
    {
        return view('livewire.department.index', [
            'departments' => Department::orderBy('name')->get(),
        ]);
    }
}
