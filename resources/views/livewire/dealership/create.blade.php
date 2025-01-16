@php
    use App\Enums\State;
@endphp

<div>
    <x-slot name="pageTitle">Create Dealership</x-slot>
    <div class="mx-auto max-w-xl">
        <form wire:submit="create" class="space-y-5">
            <flux:checkbox wire:model.live="isGroup" label="This is a dealer group." />

            @if ($isGroup)
                <flux:field>
                    <flux:label>Dealer Group Name</flux:label>

                    <flux:input wire:model="dealerGroupName" type="text" />

                    <flux:error name="dealerGroupName" />
                </flux:field>
            @endif

            <flux:field>
                <flux:label badge="Required">Dealership Name</flux:label>

                <flux:input wire:model="name" type="text" />

                <flux:error name="name" />
            </flux:field>

            <flux:field>
                <flux:label badge="Required">Address</flux:label>

                <flux:input wire:model="address" type="text" />

                <flux:error name="address" />
            </flux:field>

            <div class="grid grid-cols-2 gap-x-4 gap-y-5">
                <flux:field>
                    <flux:label badge="Required">City</flux:label>

                    <flux:input wire:model="city" type="text" />

                    <flux:error name="city" />
                </flux:field>
                <flux:field>
                    <flux:label badge="Required">State</flux:label>

                    <flux:select wire:model="state" placeholder="Choose a state...">
                        @foreach (State::cases() as $state)
                            <flux:option>{{ $state }}</flux:option>
                        @endforeach
                    </flux:select>

                    <flux:error name="address" />
                </flux:field>
            </div>

            <flux:field>
                <flux:label badge="Required">Zip Code</flux:label>

                <flux:input wire:model="zip" type="text" />

                <flux:error name="zip" />
            </flux:field>

            <flux:button type="submit" variant="primary">Submit</flux:button>
        </form>
    </div>
</div>
