<?php

namespace Tests\Feature\Auth;

use Database\Seeders\DepartmentSeeder;
use Livewire\Volt\Volt;

beforeEach(function () {
    $this->seed(DepartmentSeeder::class);
});

test('registration screen can be rendered', function () {
    $response = $this->get('/register');

    $response
        ->assertOk()
        ->assertSeeVolt('pages.auth.register');
});

test('new users can register', function () {
    $component = Volt::test('pages.auth.register')
        ->set('first_name', 'John')
        ->set('last_name', 'Doe')
        ->set('email', 'test@example.com')
        ->set('password', 'password')
        ->set('password_confirmation', 'password');

    $component->call('register');

    $component->assertRedirect(route('dashboard', absolute: false));

    $this->assertAuthenticated();
});
