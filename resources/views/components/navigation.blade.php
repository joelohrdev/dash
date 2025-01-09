<flux:navlist variant="outline">
    <flux:navlist.item icon="home" href="{{ route('dashboard') }}">Home</flux:navlist.item>
    <flux:navlist.item icon="inbox" badge="12" href="#">Inbox</flux:navlist.item>
    <flux:navlist.item icon="document-text" href="#">Documents</flux:navlist.item>
    <flux:navlist.item icon="calendar" href="#">Calendar</flux:navlist.item>

    <flux:navlist.group expandable heading="Favorites" class="hidden lg:grid">
        <flux:navlist.item href="#">Marketing site</flux:navlist.item>
        <flux:navlist.item href="#">Android app</flux:navlist.item>
        <flux:navlist.item href="#">Brand guidelines</flux:navlist.item>
    </flux:navlist.group>
</flux:navlist>
