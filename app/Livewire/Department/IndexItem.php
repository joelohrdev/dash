<?php

namespace App\Livewire\Department;

use App\Models\Department;
use Livewire\Component;

class IndexItem extends Component
{
    public Department $department;

    public function render()
    {
        return view('livewire.department.index-item');
    }
}
