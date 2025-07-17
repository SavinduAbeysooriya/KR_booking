{{--  <div>
    # Livewire Component for Property Creation


<div class="mb-9">
    <h2 class="fs-5 mb-4 mb-xl-5">Add New Property</h2>
    <div class="theme-wizard" data-theme-wizard="data-theme-wizard">
        <div class="row gx-0 gx-xl-5">
            <div class="col-xl-4 order-xl-1">
                <div class="scrollbar mb-4">
                    <ul class="nav justify-content-between flex-nowrap nav-wizard nav-wizard-vertical-xl">
                        <li class="nav-item">
                            <a class="nav-link py-0 py-xl-3 {{ $currentStep >= 1 ? 'active' : '' }}" href="#">
                                <div class="text-center d-inline-block d-xl-flex align-items-center gap-3">
                                    <span class="nav-item-circle-parent">
                                        <span class="nav-item-circle">
                                            <span class="fa-solid fa-file nav-item-icon"></span>
                                            <span class="fa-solid fa-check check-icon"></span>
                                        </span>
                                    </span>
                                    <span class="nav-item-title fs-9 fs-xl-8">Info</span>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-0 py-xl-3 {{ $currentStep >= 2 ? 'active' : '' }}" href="#">
                                <div class="text-center d-inline-block d-xl-flex align-items-center gap-3">
                                    <span class="nav-item-circle-parent">
                                        <span class="nav-item-circle">
                                            <span class="fa-solid fa-location-dot nav-item-icon"></span>
                                            <span class="fa-solid fa-check check-icon"></span>
                                        </span>
                                    </span>
                                    <span class="nav-item-title fs-9 fs-xl-8">Location</span>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-0 py-xl-3 {{ $currentStep >= 3 ? 'active' : '' }}" href="#">
                                <div class="text-center d-inline-block d-xl-flex align-items-center gap-3">
                                    <span class="nav-item-circle-parent">
                                        <span class="nav-item-circle">
                                            <span class="fa-solid fa-mug-saucer nav-item-icon"></span>
                                            <span class="fa-solid fa-check check-icon"></span>
                                        </span>
                                    </span>
                                    <span class="nav-item-title fs-9 fs-xl-8">Amenities</span>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-0 py-xl-3 {{ $currentStep >= 4 ? 'active' : '' }}" href="#">
                                <div class="text-center d-inline-block d-xl-flex align-items-center gap-3">
                                    <span class="nav-item-circle-parent">
                                        <span class="nav-item-circle">
                                            <span class="fa-solid fa-images nav-item-icon"></span>
                                            <span class="fa-solid fa-check check-icon"></span>
                                        </span>
                                    </span>
                                    <span class="nav-item-title fs-9 fs-xl-8">Photos</span>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-0 py-xl-3 {{ $currentStep >= 5 ? 'active' : '' }}" href="#">
                                <div class="text-center d-inline-block d-xl-flex align-items-center gap-3">
                                    <span class="nav-item-circle-parent">
                                        <span class="nav-item-circle">
                                            <span class="fa-solid fa-usd nav-item-icon"></span>
                                            <span class="fa-solid fa-check check-icon"></span>
                                        </span>
                                    </span>
                                    <span class="nav-item-title fs-9 fs-xl-8">Finance</span>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-0 py-xl-3 {{ $currentStep >= 6 ? 'active' : '' }}" href="#">
                                <div class="text-center d-inline-block d-xl-flex align-items-center gap-3">
                                    <span class="nav-item-circle-parent">
                                        <span class="nav-item-circle">
                                            <span class="fa-solid fa-shield-halved nav-item-icon"></span>
                                            <span class="fa-solid fa-check check-icon"></span>
                                        </span>
                                    </span>
                                    <span class="nav-item-title fs-9 fs-xl-8">Policies</span>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-0 py-xl-3 {{ $currentStep >= 7 ? 'active' : '' }}" href="#">
                                <div class="text-center d-inline-block d-xl-flex align-items-center gap-3">
                                    <span class="nav-item-circle-parent">
                                        <span class="nav-item-circle">
                                            <span class="fas fa-check"></span>
                                        </span>
                                    </span>
                                    <span class="nav-item-title fs-9 fs-xl-8">Done</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-8 flex-1">
                <div class="row">
                    <div class="col-xxl-8">
                        <!-- Step 1: Basic Information -->
                        @if($currentStep == 1)
                        <div>
                            <h3 class="mb-6">Basic information</h3>
                            <h4 class="mb-4">Property Information</h4>
                            <div class="form-floating">
                                <input class="form-control" type="text" wire:model="property_name" placeholder="Property Name" />
                                <label>Property Name</label>
                                @error('property_name') <span class="text-danger">{{ $message }}</span> @enderror
                                <h5 class="text-end text-body-quaternary fw-semibold mt-2">
                                    <span class="text-primary">{{ strlen($property_name) }}</span> / 60
                                </h5>
                            </div>
                            <div class="form-floating my-3">
                                <textarea class="form-control" placeholder="Description" wire:model="description" style="height: 162px"></textarea>
                                <label>DESCRIPTION</label>
                                @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                                <h5 class="text-end text-body-quaternary fw-semibold mt-2">
                                    <span class="text-primary">{{ strlen($description) }}</span> / 360
                                </h5>
                            </div>
                            <div class="row g-3">
                                <div class="col-md-8 col-lg-12 col-xl-8">
                                    <div class="form-floating">
                                        <select class="form-select" wire:model="property_type">
                                            <option value="Hotel">Hotel</option>
                                            <option value="Apartment">Apartment</option>
                                            <option value="Villa">Villa</option>
                                            <option value="Resort">Resort</option>
                                            <option value="Guest House">Guest House</option>
                                        </select>
                                        <label>Property Type</label>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-12 col-xl-4">
                                    <div class="form-icon-container">
                                        <div class="form-floating">
                                            <select class="form-select form-icon-input" wire:model="star_rating">
                                                <option value="5">5 star</option>
                                                <option value="4">4 star</option>
                                                <option value="3">3 star</option>
                                                <option value="2">2 star</option>
                                                <option value="1">1 star</option>
                                            </select>
                                            <label class="text-body-tertiary form-icon-label">Rating</label>
                                        </div>
                                        <span class="fa-solid fa-star text-warning form-icon fs-10"></span>
                                    </div>
                                </div>
                            </div>
                            <h4 class="mt-6 mb-3">Contact Information</h4>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input class="form-control input-spin-none" type="email" wire:model="email" placeholder="Email Address" />
                                        <label>Email Address</label>
                                        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input class="form-control input-spin-none" type="number" wire:model="phone" placeholder="Phone number" />
                                        <label>Phone number</label>
                                        @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                            </div>
                            <h4 class="mt-6 mb-3">Is it part of a hotel / property chain?</h4>
                            <div class="row align-items-center g-3">
                                <div class="col-sm-auto">
                                    <div class="form-check form-check-inline me-4 me-sm-7 mb-0">
                                        <input class="form-check-input" id="no1" type="radio" wire:model="is_hotel_chain" value="0" />
                                        <label class="form-check-label" for="no1">No</label>
                                    </div>
                                    <div class="form-check form-check-inline me-0 mb-0">
                                        <input class="form-check-input" id="yes1" type="radio" wire:model="is_hotel_chain" value="1" />
                                        <label class="form-check-label" for="yes1">Yes</label>
                                    </div>
                                </div>
                                <div class="col-sm-auto flex-1">
                                    <div class="form-floating">
                                        <input class="form-control" type="text" wire:model="hotel_chain_name" placeholder="Name of Company, Group or Chain" :disabled="!$is_hotel_chain" />
                                        <label>Name of Company, Group or Chain</label>
                                    </div>
                                </div>
                            </div>
                            <h4 class="mt-6 mb-3">Do you use a Channel Management Systems?</h4>
                            <div class="row align-items-center g-3">
                                <div class="col-sm-auto">
                                    <div class="form-check form-check-inline me-4 me-sm-7 mb-0">
                                        <input class="form-check-input" id="no2" type="radio" wire:model="uses_cms" value="0" />
                                        <label class="form-check-label" for="no2">No</label>
                                    </div>
                                    <div class="form-check form-check-inline me-0 mb-0">
                                        <input class="form-check-input" id="yes2" type="radio" wire:model="uses_cms" value="1" />
                                        <label class="form-check-label" for="yes2">Yes</label>
                                    </div>
                                </div>
                                <div class="col-sm-auto flex-1">
                                    <div class="form-floating">
                                        <input class="form-control" type="text" wire:model="cms_provider" placeholder="CMS Provider name" :disabled="!$uses_cms" />
                                        <label>CMS Provider name</label>
                                        <span class="fa-solid fa-search position-absolute text-body-quaternary fs-9 end-0 top-0 mt-3 me-3" data-fa-transform="down-2"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif

                        <!-- Step 2: Location -->
                        @if($currentStep == 2)
                        <div>
                            <h3 class="mb-6">Location</h3>
                            <div class="form-icon-container">
                                <div class="form-floating">
                                    <input class="form-control form-icon-input" type="text" wire:model="address" placeholder="Search address..." />
                                    <label class="text-body-tertiary form-icon-label">Search address...</label>
                                </div>
                                <span class="fa-solid fa-location-dot text-body form-icon fs-10"></span>
                                <span class="fa-solid fa-location-crosshairs position-absolute text-primary fs-9 end-0 top-0 mt-3 me-3" data-fa-transform="down-2"></span>
                            </div>
                            <div class="form-floating mt-3">
                                <input class="form-control" type="text" wire:model="address" placeholder="Apartment / Street" />
                                <label>Apartment / Street</label>
                                @error('address') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="row gx-3 my-3">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" type="text" wire:model="city" placeholder="City" />
                                        <label>City</label>
                                        @error('city') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input class="form-control" type="text" wire:model="province" placeholder="State (Optional)" />
                                        <label>State (Optional)</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input class="form-control" type="text" wire:model="postal_code" placeholder="Zip Code" />
                                        <label>Zip Code</label>
                                        @error('postal_code') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input class="form-control" type="text" wire:model="country" placeholder="Country / Region" />
                                        <label>Country / Region</label>
                                        @error('country') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-3 mt-6">
                                <h4>Show your specific location</h4>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" id="locationSwitchCheckChecked" type="checkbox" wire:model="show_specific_location" />
                                </div>
                            </div>
                        </div>
                        @endif

                        <!-- Step 3: Amenities -->
                        @if($currentStep == 3)
                        <div>
                            <h3 class="mb-6">General amenities</h3>
                            <div class="row g-3">
                                <div class="col-sm-auto flex-sm-fill">
                                    <div class="form-floating">
                                        <input class="form-control" type="text" placeholder="Search amenities" />
                                        <label>Search amenities</label>
                                        <span class="fa-solid fa-search position-absolute text-body-quaternary fs-9 end-0 top-0 mt-3 me-3" data-fa-transform="down-2"></span>
                                    </div>
                                </div>
                                <div class="col-sm-auto">
                                    <button class="btn btn-phoenix-primary w-100 h-100 fs-8">
                                        <span class="fa-solid fa-plus me-2"></span>Add amenity
                                    </button>
                                </div>
                            </div>

                            <!-- Popular Amenities Section -->
                            <div class="accordion mt-2" id="generalAmenitiesAccordion">
                                <div class="accordion-item px-0 py-3">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button py-0 text-body-highlight" type="button" data-bs-toggle="collapse" data-bs-target="#popularAmenities" aria-expanded="true">
                                            <span class="circle-icon-item border border-primary text-primary me-3">
                                                <span class="fa-solid fa-fire"></span>
                                            </span>
                                            <span class="flex-1">Popular amenities</span>
                                        </button>
                                    </h5>
                                    <div class="accordion-collapse collapse show" id="popularAmenities" data-bs-parent="#generalAmenitiesAccordion">
                                        <!-- Wifi -->
                                        <div class="form-price-tier border p-3 rounded-2 my-3">
                                            <div class="d-sm-flex align-items-center gap-3">
                                                <div class="form-check form-switch mb-0">
                                                    <input class="form-check-input" id="wifi" type="checkbox"
                                                           wire:model="amenities.wifi" />
                                                    <label class="form-check-label fs-8 fw-bold text-body ms-2" for="wifi">Wifi</label>
                                                </div>
                                                <div class="pricings ms-auto mt-2 mt-sm-0">
                                                    <div class="form-check form-check-inline me-3 mb-0">
                                                        <input class="form-check-input" type="radio" id="wifi-free"
                                                               wire:model="amenities.wifi.type" value="free" />
                                                        <label class="form-check-label" for="wifi-free">Free</label>
                                                    </div>
                                                    <div class="form-check form-check-inline me-0 mb-0">
                                                        <input class="form-check-input" type="radio" id="wifi-paid"
                                                               wire:model="amenities.wifi.type" value="paid" />
                                                        <label class="form-check-label" for="wifi-paid">Paid</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Breakfast -->
                                        <div class="form-price-tier border p-3 rounded-2 mb-3">
                                            <div class="d-sm-flex align-items-center gap-3">
                                                <div class="form-check form-switch mb-0">
                                                    <input class="form-check-input" id="breakfast" type="checkbox"
                                                           wire:model="amenities.breakfast" />
                                                    <label class="form-check-label fs-8 fw-bold text-body ms-2" for="breakfast">Breakfast</label>
                                                </div>
                                                <div class="pricings ms-auto mt-2 mt-sm-0">
                                                    <div class="form-check form-check-inline me-3 mb-0">
                                                        <input class="form-check-input" type="radio" id="breakfast-free"
                                                               wire:model="amenities.breakfast.type" value="free" />
                                                        <label class="form-check-label" for="breakfast-free">Free</label>
                                                    </div>
                                                    <div class="form-check form-check-inline me-0 mb-0">
                                                        <input class="form-check-input" type="radio" id="breakfast-paid"
                                                               wire:model="amenities.breakfast.type" value="paid" />
                                                        <label class="form-check-label" for="breakfast-paid">Paid</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Pool -->
                                        <div class="form-price-tier border p-3 rounded-2 mb-3">
                                            <div class="d-sm-flex align-items-center gap-3">
                                                <div class="form-check form-switch mb-0">
                                                    <input class="form-check-input" id="pool" type="checkbox"
                                                           wire:model="amenities.pool" />
                                                    <label class="form-check-label fs-8 fw-bold text-body ms-2" for="pool">Swimming pool</label>
                                                </div>
                                                <div class="pricings ms-auto mt-2 mt-sm-0">
                                                    <div class="form-check form-check-inline me-3 mb-0">
                                                        <input class="form-check-input" type="radio" id="pool-free"
                                                               wire:model="amenities.pool.type" value="free" />
                                                        <label class="form-check-label" for="pool-free">Free</label>
                                                    </div>
                                                    <div class="form-check form-check-inline me-0 mb-0">
                                                        <input class="form-check-input" type="radio" id="pool-paid"
                                                               wire:model="amenities.pool.type" value="paid" />
                                                        <label class="form-check-label" for="pool-paid">Paid</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Add more amenities as needed -->
                                    </div>
                                </div>

                                <!-- More amenity categories can be added here -->
                            </div>
                        </div>
                        @endif

                        <!-- Step 4: Photos -->
                        @if($currentStep == 4)
                        <div>
                            <h3 class="mb-6">Add property picture</h3>
                            <div class="dropzone dropzone-multiple p-0 mb-5" id="my-awesome-dropzone">
                                <div class="fallback">
                                    <input name="file" type="file" multiple wire:model="images" />
                                </div>
                                <div class="dz-message text-body-tertiary text-opacity-85">
                                    Drag your photo here<span class="text-body-secondary px-1">or</span>
                                    <button class="btn btn-link p-0" type="button">Browse from device</button><br />
                                    <img class="mt-3 me-2" src="{{ asset('assets/img/icons/image-icon.png') }}" width="40" alt="" />
                                </div>

                                @if($images)
                                <div class="dz-preview d-flex flex-wrap mt-3">
                                    @foreach($images as $index => $image)
                                    <div class="rounded-2 overflow-hidden me-2 mb-2 position-relative" style="height:140px;width:200px;">
                                        @if(is_string($image))
                                            <img class="w-100 h-100 object-fit-cover" src="{{ asset('storage/'.$image) }}" alt="..." />
                                        @else
                                            <img class="w-100 h-100 object-fit-cover" src="{{ $image->temporaryUrl() }}" alt="..." />
                                        @endif
                                        <button class="btn dropdown-toggle dropdown-caret-none px-3 text-body bg-body dz-remove w-auto h-auto py-0 border"
                                                type="button" wire:click="removeImage({{ $index }})" style="top: 16px; right: 16px">
                                            <span class="fa-solid fa-ellipsis"></span>
                                        </button>
                                    </div>
                                    @endforeach
                                </div>
                                @endif
                            </div>
                        </div>
                        @endif

                        <!-- Step 5: Finance -->
                        @if($currentStep == 5)
                        <div>
                            <h3 class="mb-6">Finance</h3>
                            <h4 class="mb-4">Payment from Phoenix Booking Management</h4>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input class="form-control" type="text" wire:model="payment_currency" placeholder="payment currency" />
                                        <label>payment currency</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input class="form-control" type="text" wire:model="commission_percentage" placeholder="Commission Percentage" disabled />
                                        <label>Commission Percentage</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-floating mt-3">
                                <select class="form-select form-icon-input" wire:model="payment_method">
                                    <option>Electronic Funds Transfer (EFT)</option>
                                    <option>Bank Transfer</option>
                                    <option>PayPal</option>
                                </select>
                                <label class="form-icon-label">Select Payment Method</label>
                            </div>
                            <div class="form-check my-4">
                                <input class="form-check-input" id="invoiceChecked" type="checkbox" wire:model="invoice_to_property" />
                                <label class="form-check-label fw-normal fs-8" for="invoiceChecked">Invoice to the name and address of property</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input class="form-control" type="text" wire:model="invoice_email" placeholder="Invoice email" />
                                <label>Invoice email</label>
                                <a class="position-absolute d-flex align-items-center px-3 fw-bold fs-9 end-0 top-0 mt-3 me-2">Verify now</a>
                            </div>
                            <h4 class="mt-6 mb-4">Payment from Guests (On property)</h4>
                            <div class="border p-3 rounded-2">
                                <div class="form-check form-switch mb-0">
                                    <input class="form-check-input" id="cashPayment" type="checkbox" wire:model="payment_from_guests.cash" />
                                    <label class="form-check-label fs-8 fw-bold text-body ms-2" for="cashPayment">Cash payment</label>
                                </div>
                            </div>
                            <div class="border p-3 rounded-2 my-3">
                                <div class="form-check form-switch mb-0">
                                    <input class="form-check-input" id="cardPayment" type="checkbox" wire:model="payment_from_guests.card" />
                                    <label class="form-check-label fs-8 fw-bold text-body ms-2" for="cardPayment">Card Payment</label>
                                </div>
                            </div>
                            <div class="border p-3 rounded-2">
                                <div class="form-check form-switch mb-0">
                                    <input class="form-check-input" id="onlinePayment" type="checkbox" wire:model="payment_from_guests.online" />
                                    <label class="form-check-label fs-8 fw-bold text-body ms-2" for="onlinePayment">MFS / Online Payment</label>
                                </div>
                            </div>
                        </div>
                        @endif

                        <!-- Step 6: Policies -->
                        @if($currentStep == 6)
                        <div>
                            <h3 class="mb-6">Policies</h3>
                            <div class="form-check form-check-inline me-5 mb-3">
                                <input class="form-check-input" id="limitedCheckIn" type="radio" wire:model="check_in_type" value="limited" />
                                <label class="form-check-label fs-8" for="limitedCheckIn">Limited Check-in</label>
                            </div>
                            <div class="form-check form-check-inline mb-3">
                                <input class="form-check-input" id="24HrCheckIn" type="radio" wire:model="check_in_type" value="24hr" />
                                <label class="form-check-label fs-8" for="24HrCheckIn">24hr Check-in</label>
                            </div>

                            @if($check_in_type == 'limited')
                            <div class="row g-3 align-items-center">
                                <div class="col-12 col-sm-6 col-md-auto flex-md-grow-1">
                                    <div class="form-floating">
                                        <input class="form-control" type="time" wire:model="check_in_start" placeholder="H:i" />
                                        <label>Check-in Starts</label>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-auto flex-md-grow-1">
                                    <div class="form-floating">
                                        <input class="form-control" type="time" wire:model="check_in_end" placeholder="H:i" />
                                        <label>Check-in Ends</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-auto">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" id="lateCheckIn" type="checkbox" wire:model="allow_late_check_in" />
                                        <label class="form-check-label fw-normal fs-8" for="lateCheckIn">Late Check-in</label>
                                    </div>
                                </div>
                            </div>
                            @endif

                            <div class="border p-3 rounded-2 mt-3">
                                <div class="form-check form-switch mb-0">
                                    <input class="form-check-input" id="ageRestriction" type="checkbox" wire:model="age_restriction" />
                                    <label class="form-check-label fs-8 fw-bold text-body ms-2" for="ageRestriction">Age Restriction</label>
                                </div>
                            </div>

                            <!-- More policy sections can be added here -->

                            <h4 class="mb-4 mt-6">Cancellation Policy</h4>
                            <div class="form-check form-check-inline me-5 mb-0">
                                <input class="form-check-input" id="nonRefundable" type="radio" wire:model="cancellation_policy" value="non_refundable" />
                                <label class="form-check-label fs-8" for="nonRefundable">Non Refundable</label>
                            </div>
                            <div class="form-check form-check-inline mb-0">
                                <input class="form-check-input" id="optionalRefund" type="radio" wire:model="cancellation_policy" value="optional_refund" />
                                <label class="form-check-label fs-8" for="optionalRefund">Optional Refund</label>


</div>  --}}


<div class="mb-9">
    <h2 class="fs-5 mb-4 mb-xl-5">Add New Property</h2>
    <div class="theme-wizard" data-theme-wizard="data-theme-wizard">
        <div class="row gx-0 gx-xl-5">
            <div class="col-xl-4 order-xl-1">
                <div class="scrollbar mb-4">
                    <ul class="nav justify-content-between flex-nowrap nav-wizard nav-wizard-vertical-xl">
                        <li class="nav-item">
                            <a class="nav-link py-0 py-xl-3 {{ $currentStep >= 1 ? 'active' : '' }}" href="#">
                                <div class="text-center d-inline-block d-xl-flex align-items-center gap-3">
                                    <span class="nav-item-circle-parent">
                                        <span class="nav-item-circle">
                                            <span class="fa-solid fa-file nav-item-icon"></span>
                                            <span class="fa-solid fa-check check-icon"></span>
                                        </span>
                                    </span>
                                    <span class="nav-item-title fs-9 fs-xl-8">Info</span>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-0 py-xl-3 {{ $currentStep >= 2 ? 'active' : '' }}" href="#">
                                <div class="text-center d-inline-block d-xl-flex align-items-center gap-3">
                                    <span class="nav-item-circle-parent">
                                        <span class="nav-item-circle">
                                            <span class="fa-solid fa-location-dot nav-item-icon"></span>
                                            <span class="fa-solid fa-check check-icon"></span>
                                        </span>
                                    </span>
                                    <span class="nav-item-title fs-9 fs-xl-8">Location</span>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-0 py-xl-3 {{ $currentStep >= 3 ? 'active' : '' }}" href="#">
                                <div class="text-center d-inline-block d-xl-flex align-items-center gap-3">
                                    <span class="nav-item-circle-parent">
                                        <span class="nav-item-circle">
                                            <span class="fa-solid fa-mug-saucer nav-item-icon"></span>
                                            <span class="fa-solid fa-check check-icon"></span>
                                        </span>
                                    </span>
                                    <span class="nav-item-title fs-9 fs-xl-8">Amenities</span>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-0 py-xl-3 {{ $currentStep >= 4 ? 'active' : '' }}" href="#">
                                <div class="text-center d-inline-block d-xl-flex align-items-center gap-3">
                                    <span class="nav-item-circle-parent">
                                        <span class="nav-item-circle">
                                            <span class="fa-solid fa-images nav-item-icon"></span>
                                            <span class="fa-solid fa-check check-icon"></span>
                                        </span>
                                    </span>
                                    <span class="nav-item-title fs-9 fs-xl-8">Photos</span>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-0 py-xl-3 {{ $currentStep >= 5 ? 'active' : '' }}" href="#">
                                <div class="text-center d-inline-block d-xl-flex align-items-center gap-3">
                                    <span class="nav-item-circle-parent">
                                        <span class="nav-item-circle">
                                            <span class="fa-solid fa-usd nav-item-icon"></span>
                                            <span class="fa-solid fa-check check-icon"></span>
                                        </span>
                                    </span>
                                    <span class="nav-item-title fs-9 fs-xl-8">Finance</span>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-0 py-xl-3 {{ $currentStep >= 6 ? 'active' : '' }}" href="#">
                                <div class="text-center d-inline-block d-xl-flex align-items-center gap-3">
                                    <span class="nav-item-circle-parent">
                                        <span class="nav-item-circle">
                                            <span class="fa-solid fa-shield-halved nav-item-icon"></span>
                                            <span class="fa-solid fa-check check-icon"></span>
                                        </span>
                                    </span>
                                    <span class="nav-item-title fs-9 fs-xl-8">Policies</span>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-0 py-xl-3 {{ $currentStep >= 7 ? 'active' : '' }}" href="#">
                                <div class="text-center d-inline-block d-xl-flex align-items-center gap-3">
                                    <span class="nav-item-circle-parent">
                                        <span class="nav-item-circle">
                                            <span class="fas fa-check"></span>
                                        </span>
                                    </span>
                                    <span class="nav-item-title fs-9 fs-xl-8">Done</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-8 flex-1">
                <div class="row">
                    <div class="col-xxl-8">
                        <!-- Step 1: Basic Information -->
                        @if($currentStep == 1)
                        <div>
                            <h3 class="mb-6">Basic Information</h3>
                            <h4 class="mb-4">Property Information</h4>
                            <div class="form-floating">
                                <input class="form-control" type="text" wire:model="property_name" placeholder="Property Name" />
                                <label>Property Name</label>
                                @error('property_name') <span class="text-danger">{{ $message }}</span> @enderror
                                <h5 class="text-end text-body-quaternary fw-semibold mt-2">
                                    <span class="text-primary">{{ strlen($property_name) }}</span> / 255
                                </h5>
                            </div>
                            <div class="form-floating my-3">
                                <textarea class="form-control" placeholder="Description" wire:model="description" style="height: 162px"></textarea>
                                <label>Description</label>
                                @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                                <h5 class="text-end text-body-quaternary fw-semibold mt-2">
                                    <span class="text-primary">{{ strlen($description) }}</span> / 360
                                </h5>
                            </div>
                            <div class="row g-3">
                                <div class="col-md-8 col-lg-12 col-xl-8">
                                    <div class="form-floating">
                                        <select class="form-select" wire:model="property_type">
                                            <option value="Hotel">Hotel</option>
                                            <option value="Apartment">Apartment</option>
                                            <option value="Villa">Villa</option>
                                            <option value="Resort">Resort</option>
                                            <option value="Guest House">Guest House</option>
                                        </select>
                                        <label>Property Type</label>
                                        @error('property_type') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-12 col-xl-4">
                                    <div class="form-icon-container">
                                        <div class="form-floating">
                                            <select class="form-select form-icon-input" wire:model="star_rating">
                                                <option value="5">5 star</option>
                                                <option value="4">4 star</option>
                                                <option value="3">3 star</option>
                                                <option value="2">2 star</option>
                                                <option value="1">1 star</option>
                                            </select>
                                            <label class="text-body-tertiary form-icon-label">Rating</label>
                                        </div>
                                        <span class="fa-solid fa-star text-warning form-icon fs-10"></span>
                                        @error('star_rating') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                            </div>
                            <h4 class="mt-6 mb-3">Contact Information</h4>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input class="form-control input-spin-none" type="email" wire:model="email" placeholder="Email Address" />
                                        <label>Email Address</label>
                                        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input class="form-control input-spin-none" type="text" wire:model="phone" placeholder="Phone number" />
                                        <label>Phone number</label>
                                        @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                            </div>
                            <h4 class="mt-6 mb-3">Is it part of a hotel / property chain?</h4>
                            <div class="row align-items-center g-3">
                                <div class="col-sm-auto">
                                    <div class="form-check form-check-inline me-4 me-sm-7 mb-0">
                                        <input class="form-check-input" id="no1" type="radio" wire:model="is_hotel_chain" value="0" />
                                        <label class="form-check-label" for="no1">No</label>
                                    </div>
                                    <div class="form-check form-check-inline me-0 mb-0">
                                        <input class="form-check-input" id="yes1" type="radio" wire:model="is_hotel_chain" value="1" />
                                        <label class="form-check-label" for="yes1">Yes</label>
                                    </div>
                                </div>
                                <div class="col-sm-auto flex-1">
                                    <div class="form-floating">
                                        <input class="form-control" type="text" wire:model="hotel_chain_name" placeholder="Name of Company, Group or Chain" :disabled="!$is_hotel_chain" />
                                        <label>Name of Company, Group or Chain</label>
                                        @error('hotel_chain_name') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                            </div>
                            <h4 class="mt-6 mb-3">Do you use a Channel Management System?</h4>
                            <div class="row align-items-center g-3">
                                <div class="col-sm-auto">
                                    <div class="form-check form-check-inline me-4 me-sm-7 mb-0">
                                        <input class="form-check-input" id="no2" type="radio" wire:model="uses_cms" value="0" />
                                        <label class="form-check-label" for="no2">No</label>
                                    </div>
                                    <div class="form-check form-check-inline me-0 mb-0">
                                        <input class="form-check-input" id="yes2" type="radio" wire:model="uses_cms" value="1" />
                                        <label class="form-check-label" for="yes2">Yes</label>
                                    </div>
                                </div>
                                <div class="col-sm-auto flex-1">
                                    <div class="form-floating">
                                        <input class="form-control" type="text" wire:model="cms_provider" placeholder="CMS Provider name" :disabled="!$uses_cms" />
                                        <label>CMS Provider name</label>
                                        <span class="fa-solid fa-search position-absolute text-body-quaternary fs-9 end-0 top-0 mt-3 me-3" data-fa-transform="down-2"></span>
                                        @error('cms_provider') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif

                        <!-- Step 2: Location -->
                        @if($currentStep == 2)
                        <div>
                            <h3 class="mb-6">Location</h3>
                            <div class="form-icon-container">
                                <div class="form-floating">
                                    <input class="form-control form-icon-input" type="text" wire:model="address" placeholder="Search address..." />
                                    <label class="text-body-tertiary form-icon-label">Search address...</label>
                                </div>
                                <span class="fa-solid fa-location-dot text-body form-icon fs-10"></span>
                                <span class="fa-solid fa-location-crosshairs position-absolute text-primary fs-9 end-0 top-0 mt-3 me-3" data-fa-transform="down-2"></span>
                                @error('address') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-floating mt-3">
                                <input class="form-control" type="text" wire:model="address" placeholder="Apartment / Street" />
                                <label>Apartment / Street</label>
                                @error('address') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="row gx-3 my-3">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" type="text" wire:model="city" placeholder="City" />
                                        <label>City</label>
                                        @error('city') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input class="form-control" type="text" wire:model="province" placeholder="State (Optional)" />
                                        <label>State (Optional)</label>
                                        @error('province') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input class="form-control" type="text" wire:model="postal_code" placeholder="Zip Code" />
                                        <label>Zip Code</label>
                                        @error('postal_code') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input class="form-control" type="text" wire:model="country" placeholder="Country / Region" />
                                        <label>Country / Region</label>
                                        @error('country') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-floating mt-3">
                                <input class="form-control" type="url" wire:model="map_url" placeholder="Map URL (Optional)" />
                                <label>Map URL (Optional)</label>
                                @error('map_url') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-floating mt-3">
                                <textarea class="form-control" wire:model="near_places" placeholder="Nearby Places" style="height: 100px"></textarea>
                                <label>Nearby Places</label>
                                @error('near_places') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-floating mt-3">
                                <textarea class="form-control" wire:model="near_places_highlight" placeholder="Nearby Places Highlights" style="height: 100px"></textarea>
                                <label>Nearby Places Highlights</label>
                                @error('near_places_highlight') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-floating mt-3">
                                <input class="form-control" type="text" wire:model="description_title" placeholder="Description Title" />
                                <label>Description Title</label>
                                @error('description_title') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="d-flex align-items-center gap-3 mt-6">
                                <h4>Show your specific location</h4>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" id="locationSwitchCheckChecked" type="checkbox" wire:model="show_specific_location" />
                                    @error('show_specific_location') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>
                        @endif

                        <!-- Step 3: Amenities -->
                        @if($currentStep == 3)
                        <div>
                            <h3 class="mb-6">General Amenities</h3>
                            <div class="row g-3">
                                <div class="col-sm-auto flex-sm-fill">
                                    <div class="form-floating">
                                        <input class="form-control" type="text" placeholder="Search amenities" />
                                        <label>Search amenities</label>
                                        <span class="fa-solid fa-search position-absolute text-body-quaternary fs-9 end-0 top-0 mt-3 me-3" data-fa-transform="down-2"></span>
                                    </div>
                                </div>
                                <div class="col-sm-auto">
                                    <button class="btn btn-phoenix-primary w-100 h-100 fs-8">
                                        <span class="fa-solid fa-plus me-2"></span>Add amenity
                                    </button>
                                </div>
                            </div>

                            <div class="accordion mt-2" id="generalAmenitiesAccordion">
                                <div class="accordion-item px-0 py-3">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button py-0 text-body-highlight" type="button" data-bs-toggle="collapse" data-bs-target="#popularAmenities" aria-expanded="true">
                                            <span class="circle-icon-item border border-primary text-primary me-3">
                                                <span class="fa-solid fa-fire"></span>
                                            </span>
                                            <span class="flex-1">Popular Amenities</span>
                                        </button>
                                    </h5>
                                    <div class="accordion-collapse collapse show" id="popularAmenities" data-bs-parent="#generalAmenitiesAccordion">
                                        @foreach($available_amenities as $id => $name)
                                        <div class="form-price-tier border p-3 rounded-2 mb-3">
                                            <div class="form-check form-switch mb-0">
                                                <input class="form-check-input" id="amenity-{{ $id }}" type="radio" wire:model="amenity_id" value="{{ $id }}" />
                                                <label class="form-check-label fs-8 fw-bold text-body ms-2" for="amenity-{{ $id }}">{{ $name }}</label>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            @error('amenity_id') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        @endif

                        <!-- Step 4: Photos -->
                        @if($currentStep == 4)
                        <div>
                            <h3 class="mb-6">Add Property Pictures</h3>
                            <div class="dropzone dropzone-multiple p-0 mb-5" id="my-awesome-dropzone">
                                <div class="fallback">
                                    <input name="file" type="file" multiple wire:model="images" />
                                </div>
                                <div class="dz-message text-body-tertiary text-opacity-85">
                                    Drag your photo here<span class="text-body-secondary px-1">or</span>
                                    <button class="btn btn-link p-0" type="button">Browse from device</button><br />
                                    <img class="mt-3 me-2" src="{{ asset('assets/img/icons/image-icon.png') }}" width="40" alt="" />
                                </div>

                                @if($images)
                                <div class="dz-preview d-flex flex-wrap mt-3">
                                    @foreach($images as $index => $image)
                                    <div class="rounded-2 overflow-hidden me-2 mb-2 position-relative" style="height:140px;width:200px;">
                                        @if(is_string($image))
                                            <img class="w-100 h-100 object-fit-cover" src="{{ asset('storage/'.$image) }}" alt="..." />
                                        @else
                                            <img class="w-100 h-100 object-fit-cover" src="{{ $image->temporaryUrl() }}" alt="..." />
                                        @endif
                                        <button class="btn dropdown-toggle dropdown-caret-none px-3 text-body bg-body dz-remove w-auto h-auto py-0 border"
                                                type="button" wire:click="removeImage({{ $index }})" style="top: 16px; right: 16px">
                                            <span class="fa-solid fa-ellipsis"></span>
                                        </button>
                                    </div>
                                    @endforeach
                                </div>
                                @endif
                                @error('images.*') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        @endif

                        <!-- Step 5: Finance -->
                        @if($currentStep == 5)
                        <div>
                            <h3 class="mb-6">Finance</h3>
                            <h4 class="mb-4">Payment from Phoenix Booking Management</h4>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input class="form-control" type="text" wire:model="payment_currency" placeholder="Payment Currency" />
                                        <label>Payment Currency</label>
                                        @error('payment_currency') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input class="form-control" type="text" wire:model="commission_percentage" placeholder="Commission Percentage" disabled />
                                        <label>Commission Percentage</label>
                                        @error('commission_percentage') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-floating mt-3">
                                <select class="form-select form-icon-input" wire:model="payment_method">
                                    <option value="Electronic Funds Transfer (EFT)">Electronic Funds Transfer (EFT)</option>
                                    <option value="Bank Transfer">Bank Transfer</option>
                                    <option value="PayPal">PayPal</option>
                                </select>
                                <label class="form-icon-label">Select Payment Method</label>
                                @error('payment_method') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-check my-4">
                                <input class="form-check-input" id="invoiceChecked" type="checkbox" wire:model="invoice_to_property" />
                                <label class="form-check-label fw-normal fs-8" for="invoiceChecked">Invoice to the name and address of property</label>
                                @error('invoice_to_property') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-floating mb-4">
                                <input class="form-control" type="email" wire:model="invoice_email" placeholder="Invoice Email" />
                                <label>Invoice Email</label>
                                <a class="position-absolute d-flex align-items-center px-3 fw-bold fs-9 end-0 top-0 mt-3 me-2">Verify now</a>
                                @error('invoice_email') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <h4 class="mt-6 mb-4">Payment from Guests (On Property)</h4>
                            <div class="border p-3 rounded-2">
                                <div class="form-check form-switch mb-0">
                                    <input class="form-check-input" id="cashPayment" type="checkbox" wire:model="payment_from_guests.cash" />
                                    <label class="form-check-label fs-8 fw-bold text-body ms-2" for="cashPayment">Cash Payment</label>
                                </div>
                            </div>
                            <div class="border p-3 rounded-2 my-3">
                                <div class="form-check form-switch mb-0">
                                    <input class="form-check-input" id="cardPayment" type="checkbox" wire:model="payment_from_guests.card" />
                                    <label class="form-check-label fs-8 fw-bold text-body ms-2" for="cardPayment">Card Payment</label>
                                </div>
                            </div>
                            <div class="border p-3 rounded-2">
                                <div class="form-check form-switch mb-0">
                                    <input class="form-check-input" id="onlinePayment" type="checkbox" wire:model="payment_from_guests.online" />
                                    <label class="form-check-label fs-8 fw-bold text-body ms-2" for="onlinePayment">MFS / Online Payment</label>
                                </div>
                            </div>
                            <div class="form-floating mt-3">
                                <input class="form-control" type="number" wire:model="price" placeholder="Price per Night" />
                                <label>Price per Night</label>
                                @error('price') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        @endif

                        <!-- Step 6: Policies -->
                        @if($currentStep == 6)
                        <div>
                            <h3 class="mb-6">Policies</h3>
                            <h4 class="mb-4">Check-in Policy</h4>
                            <div class="form-check form-check-inline me-5 mb-3">
                                <input class="form-check-input" id="limitedCheckIn" type="radio" wire:model="check_in_type" value="limited" />
                                <label class="form-check-label fs-8" for="limitedCheckIn">Limited Check-in</label>
                            </div>
                            <div class="form-check form-check-inline mb-3">
                                <input class="form-check-input" id="24HrCheckIn" type="radio" wire:model="check_in_type" value="24hr" />
                                <label class="form-check-label fs-8" for="24HrCheckIn">24hr Check-in</label>
                            </div>
                            @error('check_in_type') <span class="text-danger">{{ $message }}</span> @enderror

                            @if($check_in_type == 'limited')
                            <div class="row g-3 align-items-center">
                                <div class="col-12 col-sm-6 col-md-auto flex-md-grow-1">
                                    <div class="form-floating">
                                        <input class="form-control" type="time" wire:model="check_in_start" placeholder="H:i" />
                                        <label>Check-in Starts</label>
                                        @error('check_in_start') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-auto flex-md-grow-1">
                                    <div class="form-floating">
                                        <input class="form-control" type="time" wire:model="check_in_end" placeholder="H:i" />
                                        <label>Check-in Ends</label>
                                        @error('check_in_end') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-md-auto">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" id="lateCheckIn" type="checkbox" wire:model="allow_late_check_in" />
                                        <label class="form-check-label fw-normal fs-8" for="lateCheckIn">Allow Late Check-in</label>
                                        @error('allow_late_check_in') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                            </div>
                            @endif

                            <h4 class="mt-6 mb-4">Check-out Policy</h4>
                            <div class="form-floating mb-3">
                                <input class="form-control" type="time" wire:model="check_out_before" placeholder="Check-out Before" />
                                <label>Check-out Before</label>
                                @error('check_out_before') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" id="flexibleCheckout" type="checkbox" wire:model="flexible_checkout" />
                                <label class="form-check-label fw-normal fs-8" for="flexibleCheckout">Flexible Check-out</label>
                                @error('flexible_checkout') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            @if($flexible_checkout)
                            <div class="form-check form-check-inline me-5 mb-3">
                                <input class="form-check-input" id="flexibleFree" type="radio" wire:model="flexible_checkout_type" value="free" />
                                <label class="form-check-label fs-8" for="flexibleFree">Free</label>
                            </div>
                            <div class="form-check form-check-inline mb-3">
                                <input class="form-check-input" id="flexiblePaid" type="radio" wire:model="flexible_checkout_type" value="paid" />
                                <label class="form-check-label fs-8" for="flexiblePaid">Paid</label>
                            </div>
                            @error('flexible_checkout_type') <span class="text-danger">{{ $message }}</span> @enderror
                            @endif

                            <h4 class="mt-6 mb-4">Age Restriction</h4>
                            <div class="form-check form-switch mb-3">
                                <input class="form-check-input" id="ageRestriction" type="checkbox" wire:model="age_restriction" />
                                <label class="form-check-label fs-8 fw-bold text-body ms-2" for="ageRestriction">Age Restriction</label>
                                @error('age_restriction') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <h4 class="mt-6 mb-4">Deposit and Documentation</h4>
                            <div class="form-check form-switch mb-3">
                                <input class="form-check-input" id="depositRequired" type="checkbox" wire:model="deposit_required" />
                                <label class="form-check-label fs-8 fw-bold text-body ms-2" for="depositRequired">Deposit Required</label>
                                @error('deposit_required') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-check form-switch mb-3">
                                <input class="form-check-input" id="documentationRequired" type="checkbox" wire:model="documentation_required" />
                                <label class="form-check-label fs-8 fw-bold text-body ms-2" for="documentationRequired">Documentation Required</label>
                                @error('documentation_required') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <h4 class="mt-6 mb-4">Cancellation Policy</h4>
                            <div class="form-check form-check-inline me-5 mb-3">
                                <input class="form-check-input" id="nonRefundable" type="radio" wire:model="cancellation_policy" value="non_refundable" />
                                <label class="form-check-label fs-8" for="nonRefundable">Non Refundable</label>
                            </div>
                            <div class="form-check form-check-inline mb-3">
                                <input class="form-check-input" id="optionalRefund" type="radio" wire:model="cancellation_policy" value="optional_refund" />
                                <label class="form-check-label fs-8" for="optionalRefund">Optional Refund</label>
                            </div>
                            @error('cancellation_policy') <span class="text-danger">{{ $message }}</span> @enderror
                            @if($cancellation_policy == 'optional_refund')
                            <div class="form-check mb-3">
                                <input class="form-check-input" id="fullRefund" type="checkbox" wire:model="full_refund" />
                                <label class="form-check-label fs-8" for="fullRefund">Full Refund</label>
                                @error('full_refund') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" id="partialRefund" type="checkbox" wire:model="partial_refund" />
                                <label class="form-check-label fs-8" for="partialRefund">Partial Refund</label>
                                @error('partial_refund') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            @endif

                            <h4 class="mt-6 mb-4">Pet Policy</h4>
                            <div class="form-check form-check-inline me-5 mb-3">
                                <input class="form-check-input" id="petAllowed" type="radio" wire:model="pet_policy" value="allowed" />
                                <label class="form-check-label fs-8" for="petAllowed">Allowed</label>
                            </div>
                            <div class="form-check form-check-inline me-5 mb-3">
                                <input class="form-check-input" id="petRestricted" type="radio" wire:model="pet_policy" value="restricted" />
                                <label class="form-check-label fs-8" for="petRestricted">Restricted</label>
                            </div>
                            <div class="form-check form-check-inline mb-3">
                                <input class="form-check-input" id="petNotAllowed" type="radio" wire:model="pet_policy" value="not_allowed" />
                                <label class="form-check-label fs-8" for="petNotAllowed">Not Allowed</label>
                            </div>
                            @error('pet_policy') <span class="text-danger">{{ $message }}</span> @enderror
                            @if($pet_policy != 'not_allowed')
                            <div class="form-check mb-3">
                                <input class="form-check-input" id="petRestrictedZones" type="checkbox" wire:model="pet_restricted_zones" />
                                <label class="form-check-label fs-8" for="petRestrictedZones">Restricted Zones</label>
                                @error('pet_restricted_zones') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" id="additionalPetCharges" type="checkbox" wire:model="additional_pet_charges" />
                                <label class="form-check-label fs-8" for="additionalPetCharges">Additional Pet Charges</label>
                                @error('additional_pet_charges') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            @endif

                            <h4 class="mt-6 mb-4">Child Policy</h4>
                            @foreach($child_policy as $index => $policy)
                            <div class="row g-3 mb-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input class="form-control" type="number" wire:model="child_policy.{{ $index }}.from" placeholder="Age From" />
                                        <label>Age From</label>
                                        @error("child_policy.{$index}.from") <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input class="form-control" type="number" wire:model="child_policy.{{ $index }}.to" placeholder="Age To" />
                                        <label>Age To</label>
                                        @error("child_policy.{$index}.to") <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <div class="form-check mb-3">
                                <input class="form-check-input" id="childDocumentationRequired" type="checkbox" wire:model="child_documentation_required" />
                                <label class="form-check-label fs-8" for="childDocumentationRequired">Child Documentation Required</label>
                                @error('child_documentation_required') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <h4 class="mt-6 mb-4">Taxes</h4>
                            @foreach($taxes as $tax => $details)
                            <div class="form-price-tier border p-3 rounded-2 mb-3">
                                <div class="d-sm-flex align-items-center gap-3">
                                    <div class="form-check form-switch mb-0">
                                        <input class="form-check-input" id="{{ $tax }}" type="checkbox" wire:model="taxes.{{ $tax }}.included" />
                                        <label class="form-check-label fs-8 fw-bold text-body ms-2" for="{{ $tax }}">{{ strtoupper($tax) }}</label>
                                    </div>
                                    @if($taxes[$tax]['included'])
                                    <div class="pricings ms-auto mt-2 mt-sm-0">
                                        <div class="form-check form-check-inline me-3 mb-0">
                                            <input class="form-check-input" type="radio" id="{{ $tax }}-free" wire:model="taxes.{{ $tax }}.type" value="free" />
                                            <label class="form-check-label" for="{{ $tax }}-free">Free</label>
                                        </div>
                                        <div class="form-check form-check-inline me-0 mb-0">
                                            <input class="form-check-input" type="radio" id="{{ $tax }}-paid" wire:model="taxes.{{ $tax }}.type" value="paid" />
                                            <label class="form-check-label" for="{{ $tax }}-paid">Paid</label>
                                        </div>
                                    </div>
                                    @endif
                                    @error("taxes.{$tax}.included") <span class="text-danger">{{ $message }}</span> @enderror
                                    @error("taxes.{$tax}.type") <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            @endforeach

                            <h4 class="mt-6 mb-4">Registration Details</h4>
                            <div class="form-floating mb-3">
                                <input class="form-control" type="text" wire:model="property_registration" placeholder="Property Registration" />
                                <label>Property Registration</label>
                                @error('property_registration') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" type="text" wire:model="business_registration" placeholder="Business Registration" />
                                <label>Business Registration</label>
                                @error('business_registration') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" type="text" wire:model="taxpayer_id" placeholder="Taxpayer ID" />
                                <label>Taxpayer ID</label>
                                @error('taxpayer_id') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        @endif

                        <!-- Step 7: Done -->
                        @if($currentStep == 7)
                        <div>
                            <h3 class="mb-6">Property Created Successfully!</h3>
                            @if(session()->has('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                            @endif
                            <p>Your property has been submitted for review. You will be notified once it is approved.</p>
                            <div class="d-flex gap-3">
                                <a href="{{ route('admin.bathroom-facilities') }}" class="btn btn-primary">View Properties</a>
                                {{--  <a href="{{ route('properties.create') }}" class="btn btn-secondary">Add Another Property</a>  --}}
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <!-- Navigation Buttons -->
        <div class="d-flex justify-content-between mt-4">
            @if($currentStep > 1)
            <button class="btn btn-secondary" wire:click="previousStep">Previous</button>
            @else
            <div></div>
            @endif
            @if($currentStep < $totalSteps)
            <button class="btn btn-primary" wire:click="nextStep">Next</button>
            @elseif($currentStep == $totalSteps)
            <button class="btn btn-success" wire:click="save">Submit</button>
            @endif
        </div>
    </div>
</div>
