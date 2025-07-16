@extends('layouts.admin') {{-- your custom layout --}}

@section('content')

<meta name="csrf-token" content="{{ csrf_token() }}">
     <!-- Scripts -->
    {{--  @vite(['resources/css/app.css', 'resources/js/app.js'])  --}}
        {{--  @vite([ 'resources/js/app.js'])  --}}
    <div class="container py-6">
        {{-- Profile Info Form --}}
        <div class="mt-8">
        <livewire:profile.update-profile-information-form />
        </div>
        {{-- Password Update --}}
        <div class="mt-8">
            <livewire:profile.update-password-form />
        </div>

        {{-- 2FA Authentication --}}
        <div class="mt-8">
            <livewire:profile.two-factor-authentication-form />
        </div>

        {{-- Logout Other Sessions --}}
        <div class="mt-8">
            <livewire:profile.logout-other-browser-sessions-form />
        </div>

        {{-- Delete Account --}}
        @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
        <div class="mt-8">
            <livewire:profile.delete-user-form />
        </div>
        @endif


        {{--  @livewire('profile.get-verified-form')  --}}
         {{--  <livewire:profile.get-verified-form />  --}}

    </div>
@endsection
