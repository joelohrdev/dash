<?php

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component {
    public LoginForm $form;

    /**
     * Handle an incoming authentication request.
     */
    public function login(): void
    {
        $this->validate();

        $this->form->authenticate();

        Session::regenerate();

        $this->redirectIntended(default: route('dashboard', absolute: false), navigate: true);
    }
}; ?>

<div>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form wire:submit="login">
        <!-- Email Address -->
        <flux:field>
            <flux:label>Email</flux:label>

            <flux:input wire:model="form.email" type="email" required />

            <flux:error name="form.email" />
        </flux:field>

        <!-- Password -->
        <flux:field class="mt-4">
            <flux:label>Password</flux:label>

            <flux:input wire:model="form.password" type="password" required />

            <flux:error name="form.password" />
        </flux:field>

        <!-- Remember Me -->
        <div class="mt-4 block">
            <flux:checkbox wire:model="form.remember" label="{{ __('Remember me') }}" />
        </div>

        <div class="mt-4 flex items-center justify-end">
            @if (Route::has('password.request'))
                <a
                    class="rounded-md text-sm text-gray-600 underline hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                    href="{{ route('password.request') }}"
                    wire:navigate
                >
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <flux:button class="ms-3" type="submit" variant="primary">{{ __('Log in') }}</flux:button>
        </div>
    </form>
</div>
