<div>
    <flux:modal.trigger name="add-department">
        <flux:button variant="primary" size="xs">Add Department</flux:button>
    </flux:modal.trigger>

    <flux:modal name="add-department">
        <form wire:submit="submit" class="space-y-6 md:w-96">
            <div>
                <flux:heading size="lg">Add Department</flux:heading>
            </div>

            <flux:input wire:model="name" placeholder="Department name" />

            <div class="flex">
                <flux:spacer />

                <flux:button type="submit" variant="primary">Submit</flux:button>
            </div>
        </form>
    </flux:modal>
</div>
