{{--  <x-form-section submit="updatePassword">
    <x-slot name="title">
        {{ __('Update Password') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Ensure your account is using a long, random password to stay secure.') }}
    </x-slot>

    <x-slot name="form">
        <div class="col-span-6 sm:col-span-4">
            <x-label for="current_password" value="{{ __('Current Password') }}" />
            <x-input id="current_password" type="password" class="mt-1 block w-full" wire:model="state.current_password" autocomplete="current-password" />
            <x-input-error for="current_password" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="password" value="{{ __('New Password') }}" />
            <x-input id="password" type="password" class="mt-1 block w-full" wire:model="state.password" autocomplete="new-password" />
            <x-input-error for="password" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
            <x-input id="password_confirmation" type="password" class="mt-1 block w-full" wire:model="state.password_confirmation" autocomplete="new-password" />
            <x-input-error for="password_confirmation" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-action-message class="me-3" on="saved">
            {{ __('Saved.') }}
        </x-action-message>

        <x-button>
            {{ __('Save') }}
        </x-button>
    </x-slot>
</x-form-section>  --}}


<form wire:submit.prevent="updatePassword">
    <div class="card mb-4">
        <div class="card-header fw-semibold fs-5">
            <h5 class="mb-0">Update Password</h5>
            <small class="text-muted">Use a strong password to secure your account</small>
        </div>

        <div class="card-body row g-3">
            {{-- Current Password --}}
            <div class="col-md-4">
                <label for="current_password" class="form-label">Current Password</label>
                <input type="password" id="current_password" class="form-control"
                       wire:model.defer="state.current_password"
                       autocomplete="current-password" />
                <x-input-error for="current_password" class="text-danger mt-1" />
            </div>

            {{-- New Password --}}
            <div class="col-md-4">
                <label for="password" class="form-label">New Password</label>
                <input type="password" id="password" class="form-control"
                       wire:model.defer="state.password"
                       autocomplete="new-password" />
                <x-input-error for="password" class="text-danger mt-1" />
            </div>

            {{-- Confirm Password --}}
            <div class="col-md-4">
                <label for="password_confirmation" class="form-label">Confirm Password</label>
                <input type="password" id="password_confirmation" class="form-control"
                       wire:model.defer="state.password_confirmation"
                       autocomplete="new-password" />
                <x-input-error for="password_confirmation" class="text-danger mt-1" />
            </div>
        </div>

        <div class="card-footer d-flex justify-content-between align-items-center">
            <div>
                <x-action-message on="saved" class="text-success">
                    Saved.
                </x-action-message>
            </div>
            <button type="submit" class="btn btn-primary" wire:loading.attr="disabled">
                Save
            </button>
        </div>
    </div>
</form>
