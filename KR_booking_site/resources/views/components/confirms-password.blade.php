{{--  @props(['title' => __('Confirm Password'), 'content' => __('For your security, please confirm your password to continue.'), 'button' => __('Confirm')])

@php
    $confirmableId = md5($attributes->wire('then'));
@endphp

<span
    {{ $attributes->wire('then') }}
    x-data
    x-ref="span"
    x-on:click="$wire.startConfirmingPassword('{{ $confirmableId }}')"
    x-on:password-confirmed.window="setTimeout(() => $event.detail.id === '{{ $confirmableId }}' && $refs.span.dispatchEvent(new CustomEvent('then', { bubbles: false })), 250);"
>
    {{ $slot }}
</span>

@once
<x-dialog-modal wire:model.live="confirmingPassword">
    <x-slot name="title">
        {{ $title }}
    </x-slot>

    <x-slot name="content">
        {{ $content }}

        <div class="mt-4" x-data="{}" x-on:confirming-password.window="setTimeout(() => $refs.confirmable_password.focus(), 250)">
            <x-input type="password" class="mt-1 block w-3/4" placeholder="{{ __('Password') }}" autocomplete="current-password"
                        x-ref="confirmable_password"
                        wire:model="confirmablePassword"
                        wire:keydown.enter="confirmPassword" />

            <x-input-error for="confirmable_password" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="footer">
        <x-secondary-button wire:click="stopConfirmingPassword" wire:loading.attr="disabled">
            {{ __('Cancel') }}
        </x-secondary-button>

        <x-button class="ms-3" dusk="confirm-password-button" wire:click="confirmPassword" wire:loading.attr="disabled">
            {{ $button }}
        </x-button>
    </x-slot>
</x-dialog-modal>
@endonce  --}}
@props(['then', 'title' => 'Confirm Password', 'content' => 'For your security, please confirm your password to continue.', 'button' => 'Confirm'])

@php
    $confirmableId = md5($attributes->wire('then'));
@endphp

<span
    {{ $attributes->merge(['wire:click' => "startConfirmingPassword('$confirmableId')"]) }}
    x-data
    x-ref="span"
    x-on:password-confirmed.window="
        if ($event.detail.id === '{{ $confirmableId }}') {
            // Close the modal first
            const modal = bootstrap.Modal.getInstance(document.getElementById('confirmPasswordModal'));
            if (modal) {
                modal.hide();
            }
            // Then dispatch the 'then' event after a short delay
            setTimeout(() => $refs.span.dispatchEvent(new CustomEvent('then', { bubbles: false })), 250);
        }
    "
    data-bs-toggle="modal"
    data-bs-target="#confirmPasswordModal"
>
    {{ $slot }}
</span>

@once
<!-- Modal -->
<div wire:ignore.self class="modal fade" id="confirmPasswordModal" tabindex="-1" aria-labelledby="confirmPasswordModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content shadow">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="confirmPasswordModalLabel">{{ $title }}</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <p>{{ $content }}</p>

                <div class="mt-3">
                    <input type="password"
                        class="form-control"
                        placeholder="Password"
                        autocomplete="current-password"
                        wire:model.defer="confirmablePassword"
                        wire:keydown.enter="confirmPassword"
                        x-ref="confirmable_password"
                    />
                    <x-input-error for="confirmablePassword" class="mt-2" />
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-light" type="button" data-bs-dismiss="modal">Cancel</button>
                <button class="btn btn-primary" wire:click="confirmPassword" wire:loading.attr="disabled">
                    {{ $button }}
                </button>
            </div>
        </div>
    </div>
</div>
@endonce
