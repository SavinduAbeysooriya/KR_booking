{{--
<x-action-section>
    <x-slot name="title">
        {{ __('Delete Account') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Permanently delete your account.') }}
    </x-slot>

    <x-slot name="content">
        <div class="max-w-xl text-sm text-gray-600">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </div>

        <div class="mt-5">
            <x-danger-button wire:click="confirmUserDeletion" wire:loading.attr="disabled">
                {{ __('Delete Account') }}
            </x-danger-button>
        </div>

        <!-- Delete User Confirmation Modal -->
        <x-dialog-modal wire:model.live="confirmingUserDeletion">
            <x-slot name="title">
                {{ __('Delete Account') }}
            </x-slot>

            <x-slot name="content">
                {{ __('Are you sure you want to delete your account? Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}

                <div class="mt-4" x-data="{}" x-on:confirming-delete-user.window="setTimeout(() => $refs.password.focus(), 250)">
                    <x-input type="password" class="mt-1 block w-3/4"
                                autocomplete="current-password"
                                placeholder="{{ __('Password') }}"
                                x-ref="password"
                                wire:model="password"
                                wire:keydown.enter="deleteUser" />

                    <x-input-error for="password" class="mt-2" />
                </div>
            </x-slot>

            <x-slot name="footer">
                <x-secondary-button wire:click="$toggle('confirmingUserDeletion')" wire:loading.attr="disabled">
                    {{ __('Cancel') }}
                </x-secondary-button>

                <x-danger-button class="ms-3" wire:click="deleteUser" wire:loading.attr="disabled">
                    {{ __('Delete Account') }}
                </x-danger-button>
            </x-slot>
        </x-dialog-modal>
    </x-slot>
</x-action-section>  --}}


<div>
    <!-- Delete Account Card -->
    <div class="card mb-4">
        <div class="card-header fw-semibold fs-5">
            {{ __('Delete Account') }}
        </div>
        <div class="card-body">
            <p class="mb-3 text-secondary" style="max-width: 36rem;">
                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
            </p>

            <div class="mt-3">
                <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteAccountModal">
                    {{ __('Delete Account') }}
                </button>
            </div>
        </div>
    </div>

    <!-- Bootstrap Modal -->
    <div class="modal fade" id="deleteAccountModal" tabindex="-1" aria-labelledby="deleteAccountModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 shadow-lg">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title" id="deleteAccountModalLabel">
                        {{ __('Delete Account') }}
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <p class="mb-3 text-secondary">
                        {{ __('Are you sure you want to delete your account? Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
                    </p>

                    <div class="form-group">
                        <input
                            type="password"
                            class="form-control"
                            placeholder="{{ __('Password') }}"
                            wire:model.defer="password"
                            wire:keydown.enter="deleteUser"
                        />
                        <x-input-error for="password" class="mt-2" />
                    </div>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">
                        {{ __('Cancel') }}
                    </button>

                    <button class="btn btn-danger ms-2" wire:click="deleteUser" wire:loading.attr="disabled">
                        {{ __('Delete Account') }}
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
