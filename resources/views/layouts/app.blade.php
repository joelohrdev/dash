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

                <flux:menu class="space-y-3">
                    <flux:navlist variant="outline">
                        <flux:navlist.item icon="cog-6-tooth" href="{{ route('profile') }}">
                            Settings
                        </flux:navlist.item>
                        <flux:navlist.item icon="information-circle" href="#">Help</flux:navlist.item>
                    </flux:navlist>

                    <flux:radio.group x-data variant="segmented" x-model="$flux.appearance">
                        <flux:radio value="light" icon="sun" />
                        <flux:radio value="dark" icon="moon" />
                        <flux:radio value="system" icon="computer-desktop" />
                    </flux:radio.group>

                    <flux:menu.item icon="arrow-right-start-on-rectangle">Logout</flux:menu.item>
                </flux:menu>
            </flux:dropdown>
        </flux:sidebar>

        <flux:header class="lg:hidden">
            <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left" />

            <flux:spacer />

            <flux:dropdown position="top" alignt="start">
                <flux:profile avatar="https://fluxui.dev/img/demo/user.png" />

                <flux:menu>
                    <flux:menu.radio.group>
                        <flux:menu.radio checked>Olivia Martin</flux:menu.radio>
                        <flux:menu.radio>Truly Delta</flux:menu.radio>
                    </flux:menu.radio.group>

                    <flux:menu.separator />

                    <flux:menu.item icon="arrow-right-start-on-rectangle">Logout</flux:menu.item>
                </flux:menu>
            </flux:dropdown>
        </flux:header>

        <flux:main>
            @if (isset($pageTitle))
                <flux:heading size="lg" level="1" class="mb-3">{{ $pageTitle }}</flux:heading>
            @else
                <flux:heading size="lg" level="1" class="mb-3">
                    Good afternoon, {{ auth()->user()->first_name }}
                </flux:heading>
            @endif

            <flux:separator variant="subtle" />

            <main>
                <div class="mt-3">
                    {{ $slot }}
                </div>
            </main>
        </flux:main>
        @fluxScripts
        @persist('toast')
            <flux:toast />
        @endpersist
    </body>
</html>
