<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/Home', function () {
        $role = Auth::user()->role;

        return match ($role) {
            'admin' => view('admin.index'),
            'vendor' => view('vendor.index'),
            'customer' => view('customer.index'),
            default => view('dashboard'), // fallback
        };
    })->name('Home');
});
