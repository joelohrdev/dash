<?php

namespace App\Livewire\Department;

use App\Models\Department;
use Flux\Flux;
use Livewire\Component;

class IndexItem extends Component
{
    public Department $department;
    public string $name;

    public function mount(): void
    {
        $this->name = $this->department->name;
    }

    public function update(): void
    {
        $this->department->update([
            'name' => $this->name,
        ]);

        $this->dispatch('department-updated');

        Flux::modal('edit-department-' . $this->department->id)->close();

        Flux::toast(
            text: 'Department updated successfully',
            heading: 'Department updated',
            variant: 'success',
        );
    }

    public function render()
    {
        return view('livewire.department.index-item');
    }
}
