{{--  <x-form-section submit="updateProfileInformation">
    <x-slot name="title">
        {{ __('Profile Information') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Update your account\'s profile information and email address.') }}
    </x-slot>

    <x-slot name="form">
        <!-- Profile Photo -->
        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
            <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 sm:col-span-4">
                <!-- Profile Photo File Input -->
                <input type="file" id="photo" class="hidden"
                            wire:model.live="photo"
                            x-ref="photo"
                            x-on:change="
                                    photoName = $refs.photo.files[0].name;
                                    const reader = new FileReader();
                                    reader.onload = (e) => {
                                        photoPreview = e.target.result;
                                    };
                                    reader.readAsDataURL($refs.photo.files[0]);
                            " />

                <x-label for="photo" value="{{ __('Photo') }}" />

                <!-- Current Profile Photo -->
                <div class="mt-2" x-show="! photoPreview">
                    <img src="{{ $this->user->profile_photo_url }}" alt="{{ $this->user->name }}" class="rounded-full size-20 object-cover">
                </div>

                <!-- New Profile Photo Preview -->
                <div class="mt-2" x-show="photoPreview" style="display: none;">
                    <span class="block rounded-full size-20 bg-cover bg-no-repeat bg-center"
                          x-bind:style="'background-image: url(\'' + photoPreview + '\');'">
                    </span>
                </div>

                <x-secondary-button class="mt-2 me-2" type="button" x-on:click.prevent="$refs.photo.click()">
                    {{ __('Select A New Photo') }}
                </x-secondary-button>

                @if ($this->user->profile_photo_path)
                    <x-secondary-button type="button" class="mt-2" wire:click="deleteProfilePhoto">
                        {{ __('Remove Photo') }}
                    </x-secondary-button>
                @endif

                <x-input-error for="photo" class="mt-2" />
            </div>
        @endif

        <!-- Name -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="name" value="{{ __('Name') }}" />
            <x-input id="name" type="text" class="mt-1 block w-full" wire:model="state.name" required autocomplete="name" />
            <x-input-error for="name" class="mt-2" />
        </div>

        <!-- Email -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="email" value="{{ __('Email') }}" />
            <x-input id="email" type="email" class="mt-1 block w-full" wire:model="state.email" required autocomplete="username" />
            <x-input-error for="email" class="mt-2" />

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::emailVerification()) && ! $this->user->hasVerifiedEmail())
                <p class="text-sm mt-2">
                    {{ __('Your email address is unverified.') }}

                    <button type="button" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" wire:click.prevent="sendEmailVerification">
                        {{ __('Click here to re-send the verification email.') }}
                    </button>
                </p>

                @if ($this->verificationLinkSent)
                    <p class="mt-2 font-medium text-sm text-green-600">
                        {{ __('A new verification link has been sent to your email address.') }}
                    </p>
                @endif
            @endif
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-action-message class="me-3" on="saved">
            {{ __('Saved.') }}
        </x-action-message>

        <x-button wire:loading.attr="disabled" wire:target="photo">
            {{ __('Save') }}
        </x-button>
    </x-slot>
</x-form-section>  --}}
<form wire:submit.prevent="updateProfileInformation">
    <div class="card mb-4">
        <div class="card-header fw-semibold fs-5">
            <h5 class="mb-0">Profile Information</h5>
            <small class="text-muted">Update your name and email</small>
        </div>
        <div class="card-body row g-3">

            {{-- Profile Photo --}}
            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                <div class="col-md-12">
                    <label for="photo" class="form-label">Photo</label>

                    <div x-data="{photoName: null, photoPreview: null}">
                        <input type="file" id="photo" class="form-control d-none"
                               wire:model.live="photo"
                               x-ref="photo"
                               x-on:change="
                                    photoName = $refs.photo.files[0].name;
                                    const reader = new FileReader();
                                    reader.onload = (e) => { photoPreview = e.target.result; };
                                    reader.readAsDataURL($refs.photo.files[0]);
                               " />

                        {{-- Current Photo --}}
                        <div class="mt-2" x-show="! photoPreview">
                            <img src="{{ $this->user->profile_photo_url }}"
                                 class="rounded-circle border object-fit-cover"
                                 style="width: 80px; height: 80px;"
                                 alt="{{ $this->user->name }}">
                        </div>

                        {{-- Preview --}}
                        <div class="mt-2" x-show="photoPreview" style="display: none;">
                            <img :src="photoPreview"
                                 class="rounded-circle border"
                                 style="width: 80px; height: 80px;" />
                        </div>

                        <div class="mt-3 d-flex gap-2">
                            <button type="button" class="btn btn-outline-primary btn-sm"
                                    x-on:click.prevent="$refs.photo.click()">
                                Select New Photo
                            </button>
                            @if ($this->user->profile_photo_path)
                                <button type="button" class="btn btn-outline-danger btn-sm"
                                        wire:click="deleteProfilePhoto">
                                    Remove Photo
                                </button>
                            @endif
                        </div>
                        <x-input-error for="photo" class="text-danger mt-1" />
                    </div>
                </div>
            @endif

            {{-- Name --}}
            <div class="col-md-6">
                <label for="name" class="form-label">Name</label>
                <input type="text" id="name" class="form-control"
                       wire:model="state.name" autocomplete="name" required />
                <x-input-error for="name" class="text-danger mt-1" />
            </div>

            {{-- Email --}}
            <div class="col-md-6">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" class="form-control"
                       wire:model="state.email" autocomplete="username" required />
                <x-input-error for="email" class="text-danger mt-1" />

                @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::emailVerification()) && ! $this->user->hasVerifiedEmail())
                    <div class="mt-2 small text-warning">
                        Your email address is unverified.
                        <button type="button" class="btn btn-link p-0"
                                wire:click.prevent="sendEmailVerification">
                            Click here to re-send the verification email.
                        </button>
                    </div>
                    @if ($this->verificationLinkSent)
                        <div class="mt-2 text-success small">
                            A new verification link has been sent to your email address.
                        </div>
                    @endif
                @endif
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
