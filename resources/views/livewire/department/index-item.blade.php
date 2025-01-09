<flux:row>
    <flux:cell>{{ $department->name }}</flux:cell>
    <flux:cell class="flex justify-end">
        <div class="flex gap-1">
            <flux:modal.trigger :name="'edit-department-' . $department->id">
                <flux:button icon="pencil-square" size="xs" inset="top bottom"></flux:button>
            </flux:modal.trigger>

            <flux:modal :name="'edit-department-' . $department->id" class="space-y-6 md:w-96">
                <div>
                    <flux:heading size="lg">Update {{ $department->name }}</flux:heading>
                </div>

                <form wire:submit="update" class="space-y-6">
                    <flux:input wire:model="name" />

                    <div class="flex">
                        <flux:spacer />

                        <flux:button type="submit" variant="primary">Save changes</flux:button>
                    </div>
                </form>
            </flux:modal>
            <livewire:department.delete :$department />
        </div>
    </flux:cell>
</flux:row>
