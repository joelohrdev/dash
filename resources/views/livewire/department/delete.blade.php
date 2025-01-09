<div>
    <flux:modal.trigger :name="'delete-department-' . $department->id">
        <flux:button icon="trash" size="xs" variant="danger" inset="top bottom"></flux:button>
    </flux:modal.trigger>

    <flux:modal :name="'delete-department-' . $department->id" class="space-y-6 md:w-96">
        <div>
            <flux:heading size="lg">Delete {{ $department->name }}</flux:heading>
            <flux:subheading>Are you sure you want to delete this department?</flux:subheading>
        </div>

        <form wire:submit="delete" class="space-y-6">
            <div class="flex justify-end gap-2">
                <flux:button wire:click="closeModal()" variant="ghost">Cancel</flux:button>
                <flux:button type="submit" variant="danger">Delete</flux:button>
            </div>
        </form>
    </flux:modal>
</div>
