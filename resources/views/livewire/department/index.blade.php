<div>
    <x-slot name="pageTitle">Departments</x-slot>
    <div class="mx-auto max-w-lg">
        <div class="mb-3 flex justify-end">
            <livewire:department.create />
        </div>
        <flux:table>
            <flux:rows>
                @foreach ($departments as $department)
                    <livewire:department.index-item :$department :key="$department->id" />
                @endforeach
            </flux:rows>
        </flux:table>
    </div>
</div>
