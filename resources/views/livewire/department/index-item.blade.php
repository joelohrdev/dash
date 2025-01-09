<flux:row>
    <flux:cell>{{ $department->name }}</flux:cell>
    <flux:cell class="text-right">
        <flux:dropdown>
            <flux:button size="xs" variant="ghost" icon="ellipsis-horizontal" inset="top bottom" />

            <flux:menu>
                <flux:menu.item icon="pencil-square">Edit</flux:menu.item>

                <flux:menu.separator />

                <flux:menu.item variant="danger" icon="trash">Delete</flux:menu.item>
            </flux:menu>
        </flux:dropdown>
    </flux:cell>
</flux:row>
