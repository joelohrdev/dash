<?php

namespace App\Livewire\Department;

use App\Models\Department;
use Flux\Flux;
use Livewire\Component;

class Delete extends Component
{
    public Department $department;

    public function delete(): void
    {
        $this->department->delete();

        $this->dispatch('department-deleted');

        Flux::modal('delete-department-' . $this->department->id)->close();

        Flux::toast(
            text: 'Department deleted successfully',
            heading: 'Department deleted',
            variant: 'success',
        );
    }

    public function closeModal(): void
    {
        Flux::modal('delete-department-' . $this->department->id)->close();
    }

    public function render()
    {
        return view('livewire.department.delete');
    }
}
