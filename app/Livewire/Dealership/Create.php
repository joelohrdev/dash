<?php

namespace App\Livewire\Dealership;

use App\Enums\State;
use App\Models\DealerGroup;
use Flux\Flux;
use Illuminate\Validation\Rule;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Create extends Component
{
    public bool $isGroup = false;
    public string $dealerGroupName = '';
    public string $name = '';
    public string $address = '';
    public string $city = '';
    public string $state = '';
    public string $zip = '';

    public function create(): void
    {
        $this->validate();

        $dealer = DealerGroup::create([
            'name' => $this->dealerGroupName ?: $this->name,
        ]);

        $dealer->dealerships()->create([
            'name' => $this->name,
            'address' => $this->address,
            'city' => $this->city,
            'state' => $this->state,
            'postal_code' => $this->zip,
        ]);

        $this->reset([
            'isGroup',
            'dealerGroupName',
            'name',
            'address',
            'city',
            'state',
            'zip',
        ]);

        $this->redirectRoute('dealership.index', navigate: true);

        Flux::toast(
            text: 'The dealership was created successfully.',
            heading: 'Dealership Created',
            variant: 'success',
        );

    }

    #[Layout('layouts.app')]
    public function render(): View
    {
        return view('livewire.dealership.create');
    }

    protected function rules(): array
    {
        return [
            'dealerGroupName' => $this->isGroup
                ? ['required', 'string', 'unique:dealer_groups,name', 'unique:dealerships,name']
                : ['nullable', 'string', 'unique:dealer_groups,name', 'unique:dealerships,name'],
            'name' => ['required', 'string', 'unique:dealerships,name'],
            'address' => ['required', 'string', 'min:3', 'max:255'],
            'city' => ['required', 'string', 'min:3', 'max:255'],
            'state' => ['required', 'string', Rule::enum(State::class)],
            'zip' => ['required', 'string', 'min:3', 'max:255'],
        ];
    }
}
