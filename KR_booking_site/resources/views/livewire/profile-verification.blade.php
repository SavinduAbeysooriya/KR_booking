<div>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if ($isVerified)
        <div class="card">
            <div class="card-header bg-success text-white">
                <div class="d-flex justify-content-between align-items-center">
                    <h3 class="card-title mb-0">Verified Profile</h3>
                    <span class="badge bg-white text-success">
                        <i class="fas fa-check-circle"></i> Verified
                    </span>
                </div>
            </div>
            <div class="card-body text-center py-4">
                <div class="mb-3">
                    <i class="fas fa-check-circle text-success" style="font-size: 5rem;"></i>
                </div>
                <h4 class="mb-3">Your profile is verified!</h4>
                <p class="text-muted">Thank you for completing the verification process.</p>
                <a href="{{ route('Home') }}" class="btn btn-success">
                    <i class="fas fa-tachometer-alt"></i> Go to Dashboard
                </a>
            </div>
        </div>
    @elseif ($verificationSuccess)
        <div class="alert alert-success">
            <p>Your profile has been successfully verified!</p>
            <a href="{{ route('Home') }}" class="btn btn-primary">Go to Dashboard</a>
        </div>
    @else
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Get Verified</h3>
                <p class="card-subtitle">Complete your profile verification</p>
            </div>

            <div class="card-body">
                @if (session('message'))
                    <div class="alert alert-info">
                        {{ session('message') }}
                    </div>
                @endif

                @if (!$showOtpField)
                    <form wire:submit.prevent="submitDetails">
                        <div class="mb-3">
                            <label for="phone_number" class="form-label">Phone Number</label>
                            <input type="text" class="form-control" id="phone_number" wire:model="phone_number"
                                required>
                            @error('phone_number')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Gender</label>
                            <div class="d-flex gap-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" wire:model="gender" id="male"
                                        value="male">
                                    <label class="form-check-label" for="male">Male</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" wire:model="gender" id="female"
                                        value="female">
                                    <label class="form-check-label" for="female">Female</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" wire:model="gender" id="other"
                                        value="other">
                                    <label class="form-check-label" for="other">Other</label>
                                </div>
                            </div>
                            @error('gender')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <textarea class="form-control" id="address" wire:model="address" rows="3" required></textarea>
                            @error('address')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="date_of_birth" class="form-label">Date of Birth</label>
                            <input type="date" class="form-control" id="date_of_birth" wire:model="date_of_birth"
                                required>
                            @error('date_of_birth')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="national_id_or_passport" class="form-label">National ID or Passport
                                Number</label>
                            <input type="text" class="form-control" id="national_id_or_passport"
                                wire:model="national_id_or_passport" required>
                            @error('national_id_or_passport')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Submit & Send OTP</button>
                    </form>
                @else
                    <form wire:submit.prevent="verifyOtp">
                        <div class="mb-3">
                            <label for="otp" class="form-label">Enter OTP sent to {{ $phone_number }}</label>
                            <input type="text" class="form-control" id="otp" wire:model="otp" required
                                maxlength="6">
                            @error('otp')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Verify OTP</button>
                        <button type="button" wire:click="$set('showOtpField', false)"
                            class="btn btn-secondary">Back</button>
                    </form>
                @endif
            </div>
        </div>
    @endif
</div>
