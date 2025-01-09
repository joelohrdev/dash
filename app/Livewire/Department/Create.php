<?php

namespace App\Livewire\Department;

use App\Models\Department;
use Flux;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Create extends Component
{
    #[Validate('required|min:3|max:255')]
    public string $name = '';

    public function submit(): void
    {
        $this->validate();

        Department::create([
            'name' => $this->name,
        ]);

        $this->dispatch('department-created');

        Flux::modal('add-department')->close();

        $this->reset('name');

        Flux::toast(
            text: 'Department created successfully',
            heading: 'Department created',
            variant: 'success',
        );
    }

    public function render()
    {
        return view('livewire.department.create');
    }
}
