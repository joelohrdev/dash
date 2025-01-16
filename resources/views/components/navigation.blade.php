<flux:navlist variant="outline">
    <flux:navlist.item wire:navigate icon="home" href="{{ route('dashboard') }}">Home</flux:navlist.item>
    <flux:navlist.item wire:navigate icon="inbox" href="{{ route('department.index') }}">
        Departments
    </flux:navlist.item>
    <flux:navlist.item wire:navigate icon="building-office" href="{{ route('dealership.index') }}">
        Dealerships
    </flux:navlist.item>
    <flux:navlist.item wire:navigate icon="document-text" href="#">Documents</flux:navlist.item>
    <flux:navlist.item wire:navigate icon="calendar" href="#">Calendar</flux:navlist.item>

    <flux:navlist.group expandable heading="Favorites" class="hidden lg:grid">
        <flux:navlist.item href="#">Marketing site</flux:navlist.item>
        <flux:navlist.item href="#">Android app</flux:navlist.item>
        <flux:navlist.item href="#">Brand guidelines</flux:navlist.item>
    </flux:navlist.group>
</flux:navlist>
