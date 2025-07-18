{{--  <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                @livewire('profile.update-profile-information-form')

                <x-section-border />
            @endif

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.update-password-form')
                </div>

                <x-section-border />
            @endif

            @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.two-factor-authentication-form')
                </div>

                <x-section-border />
            @endif

            <div class="mt-10 sm:mt-0">
                @livewire('profile.logout-other-browser-sessions-form')
            </div>

            @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                <x-section-border />

                <div class="mt-10 sm:mt-0">
                    @livewire('profile.delete-user-form')
                </div>
            @endif
        </div>
    </div>
</x-app-layout>  --}}



@extends('layouts.admin') {{-- Using your Phoenix-based admin layout --}}

@section('content')
    <div class="container py-6">

        <h2 class="mb-4 fw-semibold fs-3 text-dark">Profile</h2>

        @if (Laravel\Fortify\Features::canUpdateProfileInformation())
            <div class="card mb-4">
                <div class="card-body">
                    @livewire('profile.update-profile-information-form')
                </div>
            </div>
        @endif

        @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
            <div class="card mb-4">
                <div class="card-body">
                    @livewire('profile.update-password-form')
                </div>
            </div>
        @endif

        @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
            <div class="card mb-4">
                <div class="card-body">
                    @livewire('profile.two-factor-authentication-form')
                </div>
            </div>
        @endif

        <div class="card mb-4">
            <div class="card-body">
                @livewire('profile.logout-other-browser-sessions-form')
            </div>
        </div>

        @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
            <div class="card mb-4">
                <div class="card-body">
                    @livewire('profile.delete-user-form')
                </div>
            </div>
        @endif

    </div>
@endsection
