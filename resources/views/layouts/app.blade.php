<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net" />
        <link href="https://fonts.bunny.net/css?family=inter:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @fluxStyles
    </head>
    <body class="min-h-screen bg-white dark:bg-zinc-800">
        <flux:sidebar
            sticky
            stashable
            class="border-r border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900"
        >
            <flux:sidebar.toggle class="lg:hidden" icon="x-mark" />

            <x-logo />

            <flux:input as="button" variant="filled" placeholder="Search..." icon="magnifying-glass" />

            <x-navigation />

            <flux:spacer />

            <flux:dropdown position="top" align="start" class="max-lg:hidden">
                <flux:profile avatar="https://fluxui.dev/img/demo/user.png" name="{{ auth()->user()->full_name }}" />

                <flux:menu class="space-y-5">
                    <flux:navlist variant="outline">
                        <flux:navlist.item icon="cog-6-tooth" href="{{ route('profile') }}">
                            Settings
                        </flux:navlist.item>
                        <flux:navlist.item icon="information-circle" href="#">Help</flux:navlist.item>
                    </flux:navlist>

                    {{-- <flux:menu.separator /> --}}

                    <flux:radio.group x-data variant="segmented" x-model="$flux.appearance">
                        <flux:radio value="light" icon="sun" />
                        <flux:radio value="dark" icon="moon" />
                        <flux:radio value="system" icon="computer-desktop" />
                    </flux:radio.group>

                    {{-- <flux:menu.separator /> --}}

                    <flux:menu.item icon="arrow-right-start-on-rectangle">Logout</flux:menu.item>
                </flux:menu>
            </flux:dropdown>
        </flux:sidebar>

        <flux:header
            class="!block border-b border-zinc-200 bg-white lg:bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900"
        >
            <flux:navbar class="w-full lg:hidden">
                <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left" />

                <flux:spacer />

                <flux:dropdown position="top" align="start">
                    <flux:profile avatar="https://fluxui.dev/img/demo/user.png" />

                    <flux:menu class="space-y-5">
                        <flux:navlist variant="outline">
                            <flux:navlist.item icon="cog-6-tooth" href="{{ route('profile') }}">
                                Settings
                            </flux:navlist.item>
                            <flux:navlist.item icon="information-circle" href="#">Help</flux:navlist.item>
                        </flux:navlist>

                        {{-- <flux:menu.separator /> --}}

                        <flux:radio.group x-data variant="segmented" x-model="$flux.appearance">
                            <flux:radio value="light" icon="sun" />
                            <flux:radio value="dark" icon="moon" />
                            <flux:radio value="system" icon="computer-desktop" />
                        </flux:radio.group>

                        {{-- <flux:menu.separator /> --}}

                        <flux:menu.item icon="arrow-right-start-on-rectangle">Logout</flux:menu.item>
                    </flux:menu>
                </flux:dropdown>
            </flux:navbar>

            <flux:navbar scrollable>
                <flux:navbar.item href="#" current>Dashboard</flux:navbar.item>
                <flux:navbar.item badge="32" href="#">Orders</flux:navbar.item>
                <flux:navbar.item href="#">Catalog</flux:navbar.item>
                <flux:navbar.item href="#">Configuration</flux:navbar.item>
            </flux:navbar>
        </flux:header>

        <flux:main>
            <flux:heading size="xl" level="1">Good afternoon, {{ auth()->user()->first_name }}</flux:heading>

            <flux:subheading size="lg" class="mb-6">Here's what's new today</flux:subheading>

            <flux:separator variant="subtle" />

            {{ $slot }}
        </flux:main>
        @fluxScripts
    </body>
</html>
