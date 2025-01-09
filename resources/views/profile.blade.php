<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl space-y-16">
            <livewire:profile.update-profile-information-form />
            <livewire:profile.update-password-form />
            <livewire:profile.delete-user-form />
        </div>
    </div>
</x-app-layout>
