<?php

use App\Livewire\Dealership\Create;
use App\Livewire\Department\Index;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');

    Route::get('departments', Index::class)->name('department.index');

    Route::get('dealerships', \App\Livewire\Dealership\Index::class)->name('dealership.index');
    Route::get('dealerships/create', Create::class)->name('dealership.create');

    Route::view('profile', 'profile')->name('profile');
});

require __DIR__ . '/auth.php';
