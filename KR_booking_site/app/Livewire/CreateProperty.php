<?php

// namespace App\Livewire;

// use Livewire\Component;
// use App\Models\Property;
// use Livewire\WithFileUploads;
// use Illuminate\Support\Facades\Auth;

// class CreateProperty extends Component
// {
//     use WithFileUploads;

//     // Basic Information
//     public $property_name;
//     public $description;
//     public $property_type = 'Hotel';
//     public $star_rating = 5;
//     public $email;
//     public $phone;
//     public $is_hotel_chain = false;
//     public $hotel_chain_name;
//     public $uses_cms = true;
//     public $cms_provider;

//     // Location
//     public $address;
//     public $city;
//     public $province;
//     public $country;
//     public $postal_code;
//     public $map_url;
//     public $show_specific_location = true;

//     // Amenities
//     public $amenities = [];

//     // Photos
//     public $images = [];

//     // Finance
//     public $price;
//     public $payment_currency = '$ US Dollar';
//     public $commission_percentage = 'Flat 10%';
//     public $payment_method = 'Electronic Funds Transfer (EFT)';
//     public $invoice_to_property = true;
//     public $invoice_email;
//     public $payment_from_guests = [
//         'cash' => false,
//         'card' => false,
//         'online' => false
//     ];

//     // Policies
//     public $check_in_type = 'limited';
//     public $check_in_start;
//     public $check_in_end;
//     public $allow_late_check_in = true;
//     public $age_restriction = false;
//     public $deposit_required = false;
//     public $documentation_required = false;
//     public $check_out_before;
//     public $flexible_checkout = false;
//     public $flexible_checkout_type = 'free';
//     public $cancellation_policy = 'optional';
//     public $full_refund = false;
//     public $partial_refund = false;
//     public $pet_policy = 'allowed';
//     public $pet_restricted_zones = false;
//     public $additional_pet_charges = false;
//     public $child_policy = [
//         ['from' => 0, 'to' => 7],
//         ['from' => 8, 'to' => 12],
//         ['from' => 13, 'to' => 18]
//     ];
//     public $child_documentation_required = false;
//     public $taxes = [
//         'vat' => ['included' => false, 'type' => 'free'],
//         'gst' => ['included' => false, 'type' => 'free'],
//         'hotel_tax' => ['included' => false, 'type' => 'free'],
//         'city_tax' => ['included' => false, 'type' => 'free'],
//         'tourist_tax' => ['included' => false, 'type' => 'free']
//     ];
//     public $property_registration;
//     public $business_registration;
//     public $taxpayer_id;

//     // Wizard
//     public $currentStep = 1;
//     public $totalSteps = 7;

//     protected $rules = [
//         // Basic Information
//         'property_name' => 'required|string|max:255',
//         'description' => 'required|string',
//         'property_type' => 'required|string',
//         'star_rating' => 'required|numeric|min:1|max:5',
//         'email' => 'required|email',
//         'phone' => 'required',

//         // Location
//         'address' => 'required|string',
//         'city' => 'required|string',
//         'province' => 'nullable|string',
//         'country' => 'required|string',
//         'postal_code' => 'required|string',

//         // Finance
//         'price' => 'required|numeric|min:0',
//     ];

//     public function render()
//     {
//         return view('livewire.create-property');
//     }

//     public function nextStep()
//     {
//         if ($this->currentStep === 1) {
//             $this->validate([
//                 'property_name' => 'required|string|max:255',
//                 'description' => 'required|string',
//                 'property_type' => 'required|string',
//                 'star_rating' => 'required|numeric|min:1|max:5',
//                 'email' => 'required|email',
//                 'phone' => 'required',
//             ]);
//         } elseif ($this->currentStep === 2) {
//             $this->validate([
//                 'address' => 'required|string',
//                 'city' => 'required|string',
//                 'country' => 'required|string',
//                 'postal_code' => 'required|string',
//             ]);
//         }

//         $this->currentStep++;
//     }

//     public function previousStep()
//     {
//         $this->currentStep--;
//     }

//     public function toggleAmenity($amenity, $type = null)
//     {
//         if ($type) {
//             if (isset($this->amenities[$amenity]['type'])) {
//                 if ($this->amenities[$amenity]['type'] === $type) {
//                     unset($this->amenities[$amenity]);
//                     return;
//                 }
//             }
//             $this->amenities[$amenity]['type'] = $type;
//         } else {
//             if (isset($this->amenities[$amenity])) {
//                 unset($this->amenities[$amenity]);
//             } else {
//                 $this->amenities[$amenity] = ['type' => 'free'];
//             }
//         }
//     }

//     public function save()
//     {
//         $validatedData = $this->validate();

//         // Handle image uploads
//         $imagePaths = [];
//         foreach ($this->images as $image) {
//             $imagePaths[] = $image->store('properties', 'public');
//         }

//         $property = Property::create([
//             'owner_id' => Auth::id(),
//             'property_name' => $this->property_name,
//             'description' => $this->description,
//             'property_type' => $this->property_type,
//             'star_rating' => $this->star_rating,
//             'address' => $this->address,
//             'city' => $this->city,
//             'province' => $this->province,
//             'country' => $this->country,
//             'postal_code' => $this->postal_code,
//             'map_url' => $this->map_url,
//             'price' => $this->price,
//             'images' => json_encode($imagePaths),
//             'amenities' => json_encode($this->amenities),
//             'status' => 'pending',
//         ]);

//         session()->flash('message', 'Property created successfully!');
//         $this->currentStep = $this->totalSteps; // Go to final step
//     }

//     public function updatedIsHotelChain($value)
//     {
//         if (!$value) {
//             $this->hotel_chain_name = null;
//         }
//     }

//     public function updatedUsesCms($value)
//     {
//         if (!$value) {
//             $this->cms_provider = null;
//         }
//     }
// }


namespace App\Livewire;

use Livewire\Component;
use App\Models\Property;
use App\Models\AmenityType;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;

class CreateProperty extends Component
{
    use WithFileUploads;

    // Properties remain unchanged
    public $property_name;
    public $description;
    public $property_type = 'Hotel';
    public $star_rating = 5;
    public $email;
    public $phone;
    public $is_hotel_chain = false;
    public $hotel_chain_name;
    public $uses_cms = true;
    public $cms_provider;
    public $address;
    public $city;
    public $province;
    public $country;
    public $postal_code;
    public $map_url;
    public $show_specific_location = true;
    public $near_places;
    public $near_places_highlight;
    public $description_title;
    public $amenity_id;
    public $available_amenities = [];
    public $images = [];
    public $price;
    public $payment_currency = '$ US Dollar';
    public $commission_percentage = 'Flat 10%';
    public $payment_method = 'Electronic Funds Transfer (EFT)';
    public $invoice_to_property = true;
    public $invoice_email;
    public $payment_from_guests = [
        'cash' => false,
        'card' => false,
        'online' => false
    ];
    public $check_in_type = 'limited';
    public $check_in_start;
    public $check_in_end;
    public $allow_late_check_in = true;
    public $age_restriction = false;
    public $deposit_required = false;
    public $documentation_required = false;
    public $check_out_before;
    public $flexible_checkout = false;
    public $flexible_checkout_type = 'free';
    public $cancellation_policy = 'optional';
    public $full_refund = false;
    public $partial_refund = false;
    public $pet_policy = 'allowed';
    public $pet_restricted_zones = false;
    public $additional_pet_charges = false;
    public $child_policy = [
        ['from' => 0, 'to' => 7],
        ['from' => 8, 'to' => 12],
        ['from' => 13, 'to' => 18]
    ];
    public $child_documentation_required = false;
    public $taxes = [
        'vat' => ['included' => false, 'type' => 'free'],
        'gst' => ['included' => false, 'type' => 'free'],
        'hotel_tax' => ['included' => false, 'type' => 'free'],
        'city_tax' => ['included' => false, 'type' => 'free'],
        'tourist_tax' => ['included' => false, 'type' => 'free']
    ];
    public $property_registration;
    public $business_registration;
    public $taxpayer_id;
    public $currentStep = 1;
    public $totalSteps = 7;

    protected $rules = [
        // Rules remain unchanged
        'property_name' => 'required|string|max:255',
        'description' => 'required|string|max:360',
        'property_type' => 'required|string|in:Hotel,Apartment,Villa,Resort,Guest House',
        'star_rating' => 'required|numeric|min:1|max:5',
        'email' => 'required|email',
        'phone' => 'required|string',
        'hotel_chain_name' => 'nullable|string|max:255',
        'cms_provider' => 'nullable|string|max:255',
        'address' => 'required|string|max:255',
        'city' => 'required|string|max:255',
        'province' => 'nullable|string|max:255',
        'country' => 'required|string|max:255',
        'postal_code' => 'required|string|max:255',
        'map_url' => 'nullable|url|max:255',
        'near_places' => 'nullable|string',
        'near_places_highlight' => 'nullable|string',
        'description_title' => 'nullable|string|max:255',
        'amenity_id' => 'nullable|string|max:255',
        'images.*' => 'nullable|image|mimes:jpg,jpeg,png|max:5120',
        'price' => 'required|numeric|min:0',
        'payment_currency' => 'required|string',
        'commission_percentage' => 'required|string',
        'payment_method' => 'required|string',
        'invoice_email' => 'nullable|email',
        'payment_from_guests.cash' => 'boolean',
        'payment_from_guests.card' => 'boolean',
        'payment_from_guests.online' => 'boolean',
        'check_in_type' => 'required|string|in:limited,24hr',
        'check_in_start' => 'nullable|required_if:check_in_type,limited|date_format:H:i',
        'check_in_end' => 'nullable|required_if:check_in_type,limited|date_format:H:i|after:check_in_start',
        'allow_late_check_in' => 'boolean',
        'age_restriction' => 'boolean',
        'deposit_required' => 'boolean',
        'documentation_required' => 'boolean',
        'check_out_before' => 'nullable|date_format:H:i',
        'flexible_checkout' => 'boolean',
        'flexible_checkout_type' => 'nullable|required_if:flexible_checkout,true|string|in:free,paid',
        'cancellation_policy' => 'required|string|in:non_refundable,optional_refund',
        'full_refund' => 'boolean',
        'partial_refund' => 'boolean',
        'pet_policy' => 'required|string|in:allowed,restricted,not_allowed',
        'pet_restricted_zones' => 'boolean',
        'additional_pet_charges' => 'boolean',
        'child_policy.*.from' => 'required|integer|min:0',
        'child_policy.*.to' => 'required|integer|min:0|gt:child_policy.*.from',
        'child_documentation_required' => 'boolean',
        'taxes.*.included' => 'boolean',
        'taxes.*.type' => 'nullable|required_if:taxes.*.included,true|string|in:free,paid',
        'property_registration' => 'nullable|string|max:255',
        'business_registration' => 'nullable|string|max:255',
        'taxpayer_id' => 'nullable|string|max:255',
    ];

    public function mount()
    {
        try {
            $this->available_amenities = AmenityType::all()->pluck('amenity_name', 'id')->toArray();
            Log::info('CreateProperty: Successfully loaded amenities', [
                'user_id' => Auth::id(),
                'amenity_count' => count($this->available_amenities),
            ]);
        } catch (\Exception $e) {
            Log::error('CreateProperty: Failed to load amenities', [
                'user_id' => Auth::id(),
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);
        }
    }

    public function render()
    {
        return view('livewire.create-property');
    }

    public function nextStep()
    {
        try {
            if ($this->currentStep === 1) {
                $this->validate([
                    'property_name' => 'required|string|max:255',
                    'description' => 'required|string|max:360',
                    'property_type' => 'required|string|in:Hotel,Apartment,Villa,Resort,Guest House',
                    'star_rating' => 'required|numeric|min:1|max:5',
                    'email' => 'required|email',
                    'phone' => 'required|string',
                    'hotel_chain_name' => 'nullable|string|max:255',
                    'cms_provider' => 'nullable|string|max:255',
                ]);
            } elseif ($this->currentStep === 2) {
                $this->validate([
                    'address' => 'required|string|max:255',
                    'city' => 'required|string|max:255',
                    'province' => 'nullable|string|max:255',
                    'country' => 'required|string|max:255',
                    'postal_code' => 'required|string|max:255',
                    'map_url' => 'nullable|url|max:255',
                    'near_places' => 'nullable|string',
                    'near_places_highlight' => 'nullable|string',
                    'description_title' => 'nullable|string|max:255',
                ]);
            } elseif ($this->currentStep === 3) {
                $this->validate([
                    'amenity_id' => 'nullable|string|max:255',
                ]);
            } elseif ($this->currentStep === 4) {
                $this->validate([
                    'images.*' => 'nullable|image|mimes:jpg,jpeg,png|max:5120',
                ]);
            } elseif ($this->currentStep === 5) {
                $this->validate([
                    'price' => 'required|numeric|min:0',
                    'payment_currency' => 'required|string',
                    'commission_percentage' => 'required|string',
                    'payment_method' => 'required|string',
                    'invoice_email' => 'nullable|email',
                    'payment_from_guests.cash' => 'boolean',
                    'payment_from_guests.card' => 'boolean',
                    'payment_from_guests.online' => 'boolean',
                ]);
            } elseif ($this->currentStep === 6) {
                $this->validate([
                    'check_in_type' => 'required|string|in:limited,24hr',
                    'check_in_start' => 'nullable|required_if:check_in_type,limited|date_format:H:i',
                    'check_in_end' => 'nullable|required_if:check_in_type,limited|date_format:H:i|after:check_in_start',
                    'allow_late_check_in' => 'boolean',
                    'age_restriction' => 'boolean',
                    'deposit_required' => 'boolean',
                    'documentation_required' => 'boolean',
                    'check_out_before' => 'nullable|date_format:H:i',
                    'flexible_checkout' => 'boolean',
                    'flexible_checkout_type' => 'nullable|required_if:flexible_checkout,true|string|in:free,paid',
                    'cancellation_policy' => 'required|string|in:non_refundable,optional_refund',
                    'full_refund' => 'boolean',
                    'partial_refund' => 'boolean',
                    'pet_policy' => 'required|string|in:allowed,restricted,not_allowed',
                    'pet_restricted_zones' => 'boolean',
                    'additional_pet_charges' => 'boolean',
                    'child_policy.*.from' => 'required|integer|min:0',
                    'child_policy.*.to' => 'required|integer|min:0|gt:child_policy.*.from',
                    'child_documentation_required' => 'boolean',
                    'taxes.*.included' => 'boolean',
                    'taxes.*.type' => 'nullable|required_if:taxes.*.included,true|string|in:free,paid',
                    'property_registration' => 'nullable|string|max:255',
                    'business_registration' => 'nullable|string|max:255',
                    'taxpayer_id' => 'nullable|string|max:255',
                ]);
            }

            Log::info('CreateProperty: Validation passed for step', [
                'user_id' => Auth::id(),
                'step' => $this->currentStep,
            ]);

            $this->currentStep++;
        } catch (ValidationException $e) {
            Log::warning('CreateProperty: Validation failed for step', [
                'user_id' => Auth::id(),
                'step' => $this->currentStep,
                'errors' => $e->errors(),
                'input' => $this->only(array_keys($this->rules)),
            ]);
            throw $e; // Re-throw to maintain Livewire's error handling
        } catch (\Exception $e) {
            Log::error('CreateProperty: Unexpected error in nextStep', [
                'user_id' => Auth::id(),
                'step' => $this->currentStep,
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);
            throw $e;
        }
    }

    public function previousStep()
    {
        $this->currentStep--;
        Log::info('CreateProperty: Moved to previous step', [
            'user_id' => Auth::id(),
            'step' => $this->currentStep,
        ]);
    }

    public function toggleAmenity($amenityId)
    {
        try {
            if (!array_key_exists($amenityId, $this->available_amenities)) {
                Log::warning('CreateProperty: Invalid amenity ID selected', [
                    'user_id' => Auth::id(),
                    'amenity_id' => $amenityId,
                ]);
                return;
            }
            $this->amenity_id = $amenityId === $this->amenity_id ? null : $amenityId;
            Log::info('CreateProperty: Toggled amenity', [
                'user_id' => Auth::id(),
                'amenity_id' => $this->amenity_id,
            ]);
        } catch (\Exception $e) {
            Log::error('CreateProperty: Error in toggleAmenity', [
                'user_id' => Auth::id(),
                'amenity_id' => $amenityId,
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);
        }
    }

    public function removeImage($index)
    {
        try {
            if (!isset($this->images[$index])) {
                Log::warning('CreateProperty: Invalid image index for removal', [
                    'user_id' => Auth::id(),
                    'index' => $index,
                ]);
                return;
            }
            unset($this->images[$index]);
            $this->images = array_values($this->images);
            Log::info('CreateProperty: Removed image', [
                'user_id' => Auth::id(),
                'index' => $index,
            ]);
        } catch (\Exception $e) {
            Log::error('CreateProperty: Error in removeImage', [
                'user_id' => Auth::id(),
                'index' => $index,
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);
        }
    }

    public function save()
    {
        try {
            $validatedData = $this->validate();
            Log::info('CreateProperty: Full validation passed', [
                'user_id' => Auth::id(),
                'validated_data' => array_keys($validatedData),
            ]);

            // Handle image uploads
            $imagePaths = [];
            foreach ($this->images as $index => $image) {
                try {
                    $imagePaths[] = $image->store('properties', 'public');
                    Log::info('CreateProperty: Image uploaded successfully', [
                        'user_id' => Auth::id(),
                        'index' => $index,
                        'path' => $imagePaths[$index],
                    ]);
                } catch (\Exception $e) {
                    Log::error('CreateProperty: Image upload failed', [
                        'user_id' => Auth::id(),
                        'index' => $index,
                        'error' => $e->getMessage(),
                        'trace' => $e->getTraceAsString(),
                    ]);
                    throw $e;
                }
            }

            // Prepare additional data
            $additionalData = [
                'hotel_chain' => [
                    'is_hotel_chain' => $this->is_hotel_chain,
                    'hotel_chain_name' => $this->hotel_chain_name,
                ],
                'cms' => [
                    'uses_cms' => $this->uses_cms,
                    'cms_provider' => $this->cms_provider,
                ],
                'payment_details' => [
                    'payment_currency' => $this->payment_currency,
                    'commission_percentage' => $this->commission_percentage,
                    'payment_method' => $this->payment_method,
                    'invoice_to_property' => $this->invoice_to_property,
                    'invoice_email' => $this->invoice_email,
                    'payment_from_guests' => $this->payment_from_guests,
                ],
                'policies' => [
                    'check_in_type' => $this->check_in_type,
                    'check_in_start' => $this->check_in_start,
                    'check_in_end' => $this->check_in_end,
                    'allow_late_check_in' => $this->allow_late_check_in,
                    'age_restriction' => $this->age_restriction,
                    'deposit_required' => $this->deposit_required,
                    'documentation_required' => $this->documentation_required,
                    'check_out_before' => $this->check_out_before,
                    'flexible_checkout' => $this->flexible_checkout,
                    'flexible_checkout_type' => $this->flexible_checkout_type,
                    'cancellation_policy' => $this->cancellation_policy,
                    'full_refund' => $this->full_refund,
                    'partial_refund' => $this->partial_refund,
                    'pet_policy' => $this->pet_policy,
                    'pet_restricted_zones' => $this->pet_restricted_zones,
                    'additional_pet_charges' => $this->additional_pet_charges,
                    'child_policy' => $this->child_policy,
                    'child_documentation_required' => $this->child_documentation_required,
                    'taxes' => $this->taxes,
                ],
                'registration' => [
                    'property_registration' => $this->property_registration,
                    'business_registration' => $this->business_registration,
                    'taxpayer_id' => $this->taxpayer_id,
                ],
            ];

            // Create property
            $property = Property::create([
                'owner_id' => Auth::id(),
                'property_name' => $this->property_name,
                'description' => $this->description,
                'property_type' => $this->property_type,
                'star_rating' => $this->star_rating,
                'address' => $this->address,
                'city' => $this->city,
                'province' => $this->province,
                'country' => $this->country,
                'postal_code' => $this->postal_code,
                'map_url' => $this->map_url,
                'price' => $this->price,
                'images' => json_encode($imagePaths),
                'amenities' => $this->amenity_id,
                'status' => 'pending',
                'near_places' => $this->near_places,
                'description_title' => $this->description_title,
                'availability' => $this->show_specific_location,
                'near_places_highlight' => $this->near_places_highlight,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            Log::info('CreateProperty: Property created', [
                'user_id' => Auth::id(),
                'property_id' => $property->id,
            ]);

            // Update additional data
            $property->update(['near_places' => json_encode($additionalData)]);
            Log::info('CreateProperty: Additional data updated', [
                'user_id' => Auth::id(),
                'property_id' => $property->id,
            ]);

            session()->flash('message', 'Property created successfully!');
            $this->currentStep = $this->totalSteps;
        } catch (ValidationException $e) {
            Log::warning('CreateProperty: Validation failed in save', [
                'user_id' => Auth::id(),
                'errors' => $e->errors(),
                'input' => $this->only(array_keys($this->rules)),
            ]);
            throw $e;
        } catch (\Exception $e) {
            Log::error('CreateProperty: Error in save', [
                'user_id' => Auth::id(),
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);
            throw $e;
        }
    }

    public function updatedIsHotelChain($value)
    {
        if (!$value) {
            $this->hotel_chain_name = null;
            Log::info('CreateProperty: Cleared hotel chain name', [
                'user_id' => Auth::id(),
            ]);
        }
    }

    public function updatedUsesCms($value)
    {
        if (!$value) {
            $this->cms_provider = null;
            Log::info('CreateProperty: Cleared CMS provider', [
                'user_id' => Auth::id(),
            ]);
        }
    }
}


// namespace App\Livewire;

// use Livewire\Component;
// use App\Models\Property;
// use App\Models\AmenityType; // Assuming Amenity model exists
// use Livewire\WithFileUploads;
// use Illuminate\Support\Facades\Auth;

// class CreateProperty extends Component
// {
//     use WithFileUploads;

//     // Basic Information
//     public $property_name;
//     public $description;
//     public $property_type = 'Hotel';
//     public $star_rating = 5;
//     public $email;
//     public $phone;
//     public $is_hotel_chain = false;
//     public $hotel_chain_name;
//     public $uses_cms = true;
//     public $cms_provider;

//     // Location
//     public $address;
//     public $city;
//     public $province;
//     public $country;
//     public $postal_code;
//     public $map_url;
//     public $show_specific_location = true;
//     public $near_places;
//     public $near_places_highlight;
//     public $description_title;

//     // Amenities
//     public $amenity_id; // Changed to store a single amenity ID
//     public $available_amenities = []; // To store available amenities from DB

//     // Photos
//     public $images = [];

//     // Finance
//     public $price;
//     public $payment_currency = '$ US Dollar';
//     public $commission_percentage = 'Flat 10%';
//     public $payment_method = 'Electronic Funds Transfer (EFT)';
//     public $invoice_to_property = true;
//     public $invoice_email;
//     public $payment_from_guests = [
//         'cash' => false,
//         'card' => false,
//         'online' => false
//     ];

//     // Policies
//     public $check_in_type = 'limited';
//     public $check_in_start;
//     public $check_in_end;
//     public $allow_late_check_in = true;
//     public $age_restriction = false;
//     public $deposit_required = false;
//     public $documentation_required = false;
//     public $check_out_before;
//     public $flexible_checkout = false;
//     public $flexible_checkout_type = 'free';
//     public $cancellation_policy = 'optional';
//     public $full_refund = false;
//     public $partial_refund = false;
//     public $pet_policy = 'allowed';
//     public $pet_restricted_zones = false;
//     public $additional_pet_charges = false;
//     public $child_policy = [
//         ['from' => 0, 'to' => 7],
//         ['from' => 8, 'to' => 12],
//         ['from' => 13, 'to' => 18]
//     ];
//     public $child_documentation_required = false;
//     public $taxes = [
//         'vat' => ['included' => false, 'type' => 'free'],
//         'gst' => ['included' => false, 'type' => 'free'],
//         'hotel_tax' => ['included' => false, 'type' => 'free'],
//         'city_tax' => ['included' => false, 'type' => 'free'],
//         'tourist_tax' => ['included' => false, 'type' => 'free']
//     ];
//     public $property_registration;
//     public $business_registration;
//     public $taxpayer_id;

//     // Wizard
//     public $currentStep = 1;
//     public $totalSteps = 7;

//     protected $rules = [
//         // Basic Information
//         'property_name' => 'required|string|max:255',
//         'description' => 'required|string|max:360',
//         'property_type' => 'required|string|in:Hotel,Apartment,Villa,Resort,Guest House',
//         'star_rating' => 'required|numeric|min:1|max:5',
//         'email' => 'required|email',
//         'phone' => 'required|string',
//         'hotel_chain_name' => 'nullable|string|max:255',
//         'cms_provider' => 'nullable|string|max:255',

//         // Location
//         'address' => 'required|string|max:255',
//         'city' => 'required|string|max:255',
//         'province' => 'nullable|string|max:255',
//         'country' => 'required|string|max:255',
//         'postal_code' => 'required|string|max:255',
//         'map_url' => 'nullable|url|max:255',
//         'near_places' => 'nullable|string',
//         'near_places_highlight' => 'nullable|string',
//         'description_title' => 'nullable|string|max:255',

//         // Amenities
//         'amenity_id' => 'nullable|exists:amenities,id',

//         // Photos
//         'images.*' => 'nullable|image|mimes:jpg,jpeg,png|max:5120', // 5MB max per image

//         // Finance
//         'price' => 'required|numeric|min:0',
//         'payment_currency' => 'required|string',
//         'commission_percentage' => 'required|string',
//         'payment_method' => 'required|string',
//         'invoice_email' => 'nullable|email',
//         'payment_from_guests.cash' => 'boolean',
//         'payment_from_guests.card' => 'boolean',
//         'payment_from_guests.online' => 'boolean',

//         // Policies
//         'check_in_type' => 'required|string|in:limited,24hr',
//         'check_in_start' => 'nullable|required_if:check_in_type,limited|date_format:H:i',
//         'check_in_end' => 'nullable|required_if:check_in_type,limited|date_format:H:i|after:check_in_start',
//         'allow_late_check_in' => 'boolean',
//         'age_restriction' => 'boolean',
//         'deposit_required' => 'boolean',
//         'documentation_required' => 'boolean',
//         'check_out_before' => 'nullable|date_format:H:i',
//         'flexible_checkout' => 'boolean',
//         'flexible_checkout_type' => 'nullable|required_if:flexible_checkout,true|string|in:free,paid',
//         'cancellation_policy' => 'required|string|in:non_refundable,optional_refund',
//         'full_refund' => 'boolean',
//         'partial_refund' => 'boolean',
//         'pet_policy' => 'required|string|in:allowed,restricted,not_allowed',
//         'pet_restricted_zones' => 'boolean',
//         'additional_pet_charges' => 'boolean',
//         'child_policy.*.from' => 'required|integer|min:0',
//         'child_policy.*.to' => 'required|integer|min:0|gt:child_policy.*.from',
//         'child_documentation_required' => 'boolean',
//         'taxes.*.included' => 'boolean',
//         'taxes.*.type' => 'nullable|required_if:taxes.*.included,true|string|in:free,paid',
//         'property_registration' => 'nullable|string|max:255',
//         'business_registration' => 'nullable|string|max:255',
//         'taxpayer_id' => 'nullable|string|max:255',
//     ];

//     public function mount()
//     {
//         // Load available amenities from the database
//         $this->available_amenities = AmenityType::all()->pluck('amenity_name', 'id')->toArray();
//     }

//     public function render()
//     {
//         return view('livewire.create-property');
//     }

//     public function nextStep()
//     {
//         if ($this->currentStep === 1) {
//             $this->validate([
//                 'property_name' => 'required|string|max:255',
//                 'description' => 'required|string|max:360',
//                 'property_type' => 'required|string|in:Hotel,Apartment,Villa,Resort,Guest House',
//                 'star_rating' => 'required|numeric|min:1|max:5',
//                 'email' => 'required|email',
//                 'phone' => 'required|string',
//                 'hotel_chain_name' => 'nullable|string|max:255',
//                 'cms_provider' => 'nullable|string|max:255',
//             ]);
//         } elseif ($this->currentStep === 2) {
//             $this->validate([
//                 'address' => 'required|string|max:255',
//                 'city' => 'required|string|max:255',
//                 'province' => 'nullable|string|max:255',
//                 'country' => 'required|string|max:255',
//                 'postal_code' => 'required|string|max:255',
//                 'map_url' => 'nullable|url|max:255',
//                 'near_places' => 'nullable|string',
//                 'near_places_highlight' => 'nullable|string',
//                 'description_title' => 'nullable|string|max:255',
//             ]);
//         } elseif ($this->currentStep === 3) {
//             $this->validate([
//                 'amenity_id' => 'nullable|string|max:255',
//             ]);
//         } elseif ($this->currentStep === 4) {
//             $this->validate([
//                 'images.*' => 'nullable|image|mimes:jpg,jpeg,png|max:5120',
//             ]);
//         } elseif ($this->currentStep === 5) {
//             $this->validate([
//                 'price' => 'required|numeric|min:0',
//                 'payment_currency' => 'required|string',
//                 'commission_percentage' => 'required|string',
//                 'payment_method' => 'required|string',
//                 'invoice_email' => 'nullable|email',
//                 'payment_from_guests.cash' => 'boolean',
//                 'payment_from_guests.card' => 'boolean',
//                 'payment_from_guests.online' => 'boolean',
//             ]);
//         } elseif ($this->currentStep === 6) {
//             $this->validate([
//                 'check_in_type' => 'required|string|in:limited,24hr',
//                 'check_in_start' => 'nullable|required_if:check_in_type,limited|date_format:H:i',
//                 'check_in_end' => 'nullable|required_if:check_in_type,limited|date_format:H:i|after:check_in_start',
//                 'allow_late_check_in' => 'boolean',
//                 'age_restriction' => 'boolean',
//                 'deposit_required' => 'boolean',
//                 'documentation_required' => 'boolean',
//                 'check_out_before' => 'nullable|date_format:H:i',
//                 'flexible_checkout' => 'boolean',
//                 'flexible_checkout_type' => 'nullable|required_if:flexible_checkout,true|string|in:free,paid',
//                 'cancellation_policy' => 'required|string|in:non_refundable,optional_refund',
//                 'full_refund' => 'boolean',
//                 'partial_refund' => 'boolean',
//                 'pet_policy' => 'required|string|in:allowed,restricted,not_allowed',
//                 'pet_restricted_zones' => 'boolean',
//                 'additional_pet_charges' => 'boolean',
//                 'child_policy.*.from' => 'required|integer|min:0',
//                 'child_policy.*.to' => 'required|integer|min:0|gt:child_policy.*.from',
//                 'child_documentation_required' => 'boolean',
//                 'taxes.*.included' => 'boolean',
//                 'taxes.*.type' => 'nullable|required_if:taxes.*.included,true|string|in:free,paid',
//                 'property_registration' => 'nullable|string|max:255',
//                 'business_registration' => 'nullable|string|max:255',
//                 'taxpayer_id' => 'nullable|string|max:255',
//             ]);
//         }

//         $this->currentStep++;
//     }

//     public function previousStep()
//     {
//         $this->currentStep--;
//     }

//     public function toggleAmenity($amenityId)
//     {
//         $this->amenity_id = $amenityId === $this->amenity_id ? null : $amenityId;
//     }

//     public function removeImage($index)
//     {
//         unset($this->images[$index]);
//         $this->images = array_values($this->images); // Reindex array
//     }

//     public function save()
//     {
//         $validatedData = $this->validate();

//         // Handle image uploads
//         $imagePaths = [];
//         foreach ($this->images as $image) {
//             $imagePaths[] = $image->store('properties', 'public');
//         }

//         // Prepare additional data (JSON for policies, etc.)
//         $additionalData = [
//             'hotel_chain' => [
//                 'is_hotel_chain' => $this->is_hotel_chain,
//                 'hotel_chain_name' => $this->hotel_chain_name,
//             ],
//             'cms' => [
//                 'uses_cms' => $this->uses_cms,
//                 'cms_provider' => $this->cms_provider,
//             ],
//             'payment_details' => [
//                 'payment_currency' => $this->payment_currency,
//                 'commission_percentage' => $this->commission_percentage,
//                 'payment_method' => $this->payment_method,
//                 'invoice_to_property' => $this->invoice_to_property,
//                 'invoice_email' => $this->invoice_email,
//                 'payment_from_guests' => $this->payment_from_guests,
//             ],
//             'policies' => [
//                 'check_in_type' => $this->check_in_type,
//                 'check_in_start' => $this->check_in_start,
//                 'check_in_end' => $this->check_in_end,
//                 'allow_late_check_in' => $this->allow_late_check_in,
//                 'age_restriction' => $this->age_restriction,
//                 'deposit_required' => $this->deposit_required,
//                 'documentation_required' => $this->documentation_required,
//                 'check_out_before' => $this->check_out_before,
//                 'flexible_checkout' => $this->flexible_checkout,
//                 'flexible_checkout_type' => $this->flexible_checkout_type,
//                 'cancellation_policy' => $this->cancellation_policy,
//                 'full_refund' => $this->full_refund,
//                 'partial_refund' => $this->partial_refund,
//                 'pet_policy' => $this->pet_policy,
//                 'pet_restricted_zones' => $this->pet_restricted_zones,
//                 'additional_pet_charges' => $this->additional_pet_charges,
//                 'child_policy' => $this->child_policy,
//                 'child_documentation_required' => $this->child_documentation_required,
//                 'taxes' => $this->taxes,
//             ],
//             'registration' => [
//                 'property_registration' => $this->property_registration,
//                 'business_registration' => $this->business_registration,
//                 'taxpayer_id' => $this->taxpayer_id,
//             ],
//         ];

//         $property = Property::create([
//             'owner_id' => Auth::id(),
//             'property_name' => $this->property_name,
//             'description' => $this->description,
//             'property_type' => $this->property_type,
//             'star_rating' => $this->star_rating,
//             'address' => $this->address,
//             'city' => $this->city,
//             'province' => $this->province,
//             'country' => $this->country,
//             'postal_code' => $this->postal_code,
//             'map_url' => $this->map_url,
//             'price' => $this->price,
//             'images' => json_encode($imagePaths),
//             'amenities' => $this->amenity_id,
//             'status' => 'pending',
//             'near_places' => $this->near_places,
//             'description_title' => $this->description_title,
//             'availability' => $this->show_specific_location,
//             'near_places_highlight' => $this->near_places_highlight,
//             'created_at' => now(),
//             'updated_at' => now(),
//         ]);


//         // Save additional data in a related table or JSON field if needed
//         // For simplicity, store in `near_places` as JSON for policies
//         $property->update(['near_places' => json_encode($additionalData)]);

//         session()->flash('message', 'Property created successfully!');
//         $this->currentStep = $this->totalSteps;
//     }

//     public function updatedIsHotelChain($value)
//     {
//         if (!$value) {
//             $this->hotel_chain_name = null;
//         }
//     }

//     public function updatedUsesCms($value)
//     {
//         if (!$value) {
//             $this->cms_provider = null;
//         }
//     }
// }
