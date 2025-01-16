<div>
    <x-slot name="pageTitle">Dealerships</x-slot>
    <x-slot name="actions">
        <flux:button wire:navigate size="xs" variant="primary" href="{{ route('dealership.create') }}">
            Create Dealership
        </flux:button>
    </x-slot>
    <div>
        <flux:table>
            <flux:columns>
                <flux:column>Dealership</flux:column>
                <flux:column>Count</flux:column>
                <flux:column>Status</flux:column>
                <flux:column>Amount</flux:column>
            </flux:columns>

            <flux:rows>
                @foreach ($dealerships as $dealership)
                    <flux:row>
                        <flux:cell>{{ $dealership->name }}</flux:cell>
                        <flux:cell>
                            <flux:badge color="zinc" size="sm" inset="top bottom">
                                {{ $dealership->dealerships_count }}
                            </flux:badge>
                        </flux:cell>
                        <flux:cell></flux:cell>
                        <flux:cell></flux:cell>
                    </flux:row>
                @endforeach
            </flux:rows>
        </flux:table>
    </div>
</div>
