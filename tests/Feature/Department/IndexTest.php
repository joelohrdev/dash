<?php

// tests/Feature/DepartmentIndexTest.php

use App\Livewire\Department\Index;
use App\Models\Department;

use function Pest\Livewire\livewire;

it('renders the department index component', function () {
    livewire(Index::class)
        ->assertOk();
});

it('loads departments', function () {
    // Create some departments
    Department::create(['name' => 'Sales']);
    Department::create(['name' => 'Accounting']);
    Department::create(['name' => 'Service']);

    livewire(Index::class)
        ->assertSee('Sales');
});

it('can see the create department component', function () {
    livewire(Index::class)
        ->assertSee('Add Department');
});
