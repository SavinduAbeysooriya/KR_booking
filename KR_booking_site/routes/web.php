<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Livewire\ProfileVerification;
use App\Livewire\AmenityTypeForm;
use App\Http\Controllers\AdminController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware(['auth', 'verified'])->get('/admin/profile', function () {
    return view('admin.profile');
})->name('admin.profile');




Route::get('/profile/verify', function () {})->middleware('auth')->name('profile.verify');


Route::middleware(['auth', 'verified'])->get('/admin/amenity-types', function () {
    return view('admin.amenity_types');
})->name('admin.amenity-types');
