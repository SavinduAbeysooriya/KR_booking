<?php


// namespace App\Livewire;

// use App\Models\AmenityType;
// use Livewire\Component;

// class AmenityTypeForm extends Component
// {
//     public $amenity_name;
//     public $iconSearch = '';
//     public $showIconModal = false;
//     public $selectedIcon = 'bx bx-building';

//     protected $rules = [
//         'amenity_name' => 'required|string|max:255|unique:amenity_types,amenity_name',
//         'selectedIcon' => 'required|string',
//     ];

//     public function render()
//     {
//         return view('livewire.amenity-type-form', [
//             'filteredIcons' => $this->filterIcons(),
//         ]);
//     }

//     public function filterIcons()
//     {
//        $phoenixIcons = [
//             // Regular icons (bx) - Hotel amenities
//             'bx bx-bed',           // Bedroom, bed
//             'bx bx-bath',          // Bathroom, bathtub
//             'bx bx-wifi',          // Wi-Fi
//             'bx bx-swim',          // Swimming pool
//             'bx bx-restaurant',    // Restaurant, dining
//             'bx bx-coffee',        // Coffee shop, café
//             'bx bx-dumbbell',      // Gym, fitness center
//             'bx bx-parking',       // Parking
//             'bx bx-cool',          // Air conditioning
//             'bx bx-home',          // Room, accommodation
//             'bx bx-hotel',         // Hotel
//             'bx bx-spa',           // Spa
//             'bx bx-chair',         // Lounge, seating area
//             'bx bx-tv',            // Television
//             'bx bx-car',           // Car rental, shuttle service
//             'bx bx-bicycle',       // Bicycle rental
//             'bx bx-basketball',    // Sports facilities
//             'bx bx-tennis-ball',   // Tennis court
//             'bx bx-accessibility', // Accessibility features
//             'bx bx-elevator',      // Elevator
//             'bx bx-shower',        // Shower
//             'bx bx-hot-tub',       // Hot tub, jacuzzi
//             'bx bx-coffee-togo',   // Coffee to-go, breakfast
//             'bx bx-beer',          // Bar
//             'bx bx-bus',           // Shuttle service
//             'bx bx-cake',          // Bakery, dessert
//             'bx bx-dish',          // Kitchen, dining
//             'bx bx-fan',           // Ventilation, fan
//             'bx bx-fridge',        // Mini fridge
//             'bx bx-heater',        // Heating
//             'bx bx-key',           // Keycard, room access
//             'bx bx-luggage-cart',  // Luggage storage
//             'bx bx-no-smoking',    // Non-smoking rooms
//             'bx bx-sun',           // Outdoor area, sun deck
//             'bx bx-water',         // Bottled water
//             'bx bx-wine',          // Wine bar, room service
//             'bx bx-door-open',     // Room entry
//             'bx bx-lock',          // Safe, security
//             'bx bx-phone',         // Telephone
//             'bx bx-plug',          // Power outlet
//             'bx bx-taxi',          // Taxi service
//             'bx bx-umbrella',      // Outdoor umbrella, poolside
//             'bx bx-wallet',        // Payment services
//             'bx bx-bell',          // Concierge, bell service
//             'bx bx-calendar',      // Booking, check-in
//             'bx bx-globe',         // Multilingual staff, global services
//             'bx bx-map',           // Location, map
//             'bx bx-support',       // 24-hour front desk
//             'bx bx-user',          // Guest services
//             'bx bx-washing-machine', // Laundry service
//             // Solid icons (bxs) - Hotel amenities
//             'bx bxs-bed',          // Bedroom, bed (filled)
//             'bx bxs-bath',         // Bathroom, bathtub (filled)
//             'bx bxs-wifi',         // Wi-Fi (filled)
//             'bx bxs-coffee',       // Coffee shop (filled)
//             'bx bxs-restaurant',   // Restaurant (filled)
//             'bx bxs-home',         // Room (filled)
//             'bx bxs-hotel',        // Hotel (filled)
//             'bx bxs-car',          // Car service (filled)
//             'bx bxs-bus',          // Shuttle service (filled)
//             'bx bxs-key',          // Keycard (filled)
//             'bx bxs-lock',         // Safe (filled)
//             'bx bxs-map',          // Location (filled)
//             'bx bxs-phone',        // Telephone (filled)
//             'bx bxs-star',         // High-quality service (filled)
//             'bx bxs-user',         // Guest services (filled)
//             'bx bxs-wallet',       // Payment services (filled)
//             'bx bxs-bell',         // Concierge (filled)
//             'bx bxs-calendar',     // Booking (filled)
//             'bx bxs-dish',         // Kitchen (filled)
//             'bx bxs-hot',          // Heating (filled)
//             // Logo icons (bxl) - Relevant to hotel branding
//             'bx bxl-airbnb',       // Airbnb partnership
//         ];

//         // Optional: Load full icon list from JSON file for scalability
//         // $phoenixIcons = json_decode(file_get_contents(storage_path('app/boxicons.json')), true) ?? $phoenixIcons;

//         return empty($this->iconSearch)
//             ? $phoenixIcons
//             : array_filter($phoenixIcons, fn($icon) => stripos($icon, $this->iconSearch) !== false);
//     }

//     public function toggleIconModal()
//     {
//         $this->showIconModal = !$this->showIconModal;
//     }

//     public function selectIcon($icon)
//     {
//         $this->selectedIcon = $icon;
//         $this->showIconModal = false;
//     }

//     public function saveAmenityType()
//     {
//         $this->validate();

//         AmenityType::create([
//             'amenity_name' => $this->amenity_name,
//             'icon' => $this->selectedIcon,
//         ]);

//         $this->reset(['amenity_name']);
//         session()->flash('message', 'Amenity type added successfully!');
//     }
// }



namespace App\Livewire;

use App\Models\AmenityType;
use Livewire\Component;
use Illuminate\Support\Str;

class AmenityTypeForm extends Component
{
    public $amenity_name;
    public $iconSearch = '';
    public $showIconModal = false;
    public $selectedIcon = 'bx bx-building';
    public $perPage = 48; // Number of icons to show per "page"

    protected $rules = [
        'amenity_name' => 'required|string|max:255|unique:amenity_types,amenity_name',
        'selectedIcon' => 'required|string',
    ];

    public function render()
    {
        return view('livewire.amenity-type-form', [
            'filteredIcons' => $this->filterIcons(),
        ]);
    }

    public function filterIcons()
    {
        $allIcons = $this->getAllBoxIcons();

        if (empty($this->iconSearch)) {
            return array_slice($allIcons, 0, $this->perPage);
        }

        return array_filter($allIcons, function($icon) {
            // Search both the icon class and the readable name
            $readableName = $this->getIconReadableName($icon);
            return Str::contains(strtolower($icon), strtolower($this->iconSearch)) ||
                   Str::contains(strtolower($readableName), strtolower($this->iconSearch));
        });
    }

    protected function getIconReadableName($iconClass)
    {
        // Convert "bx bx-building" to "Building"
        $name = str_replace(['bx bx-', 'bxs bxs-', 'bxl bxl-'], '', $iconClass);
        $name = str_replace('-', ' ', $name);
        return ucwords($name);
    }

public function getAllBoxIcons()
{
    return [
        // Accommodation
        'bx bx-building', 'bx bx-hotel', 'bx bx-home', 'bx bx-home-alt', 'bx bx-home-circle',
        'bx bx-home-heart', 'bx bx-home-smile', 'bx bx-bed', 'bx bx-door-open', 'bx bx-key',

        // Food & Beverage
        'bx bx-restaurant', 'bx bx-food-menu', 'bx bx-drink', 'bx bx-coffee', 'bx bx-coffee-togo',
        'bx bx-wine', 'bx bx-beer',  'bx bx-bowl-rice', 'bx bx-bowl-hot',

        // Facilities
        'bx bx-swim', 'bx bx-water', 'bx bx-spa', 'bx bx-shower', 'bx bx-bath',
        'bx bx-dumbbell', 'bx bx-run', 'bx bx-cycling',

        // Technology
        'bx bx-wifi', 'bx bx-tv', 'bx bx-desktop', 'bx bx-laptop', 'bx bx-phone',
        'bx bx-phone-call', 'bx bx-headphone', 'bx bx-microphone', 'bx bx-camera',

        // Transportation
        'bx bx-car', 'bx bx-taxi', 'bx bx-bus', 'bx bx-train',
       'bx bx-gas-pump', 'bx bx-map', 'bx bx-map-alt',

        // Services
        'bx bx-bell', 'bx bx-bell-plus', 'bx bx-calendar', 'bx bx-calendar-check',
        'bx bx-alarm', 'bx bx-alarm-off', 'bx bx-credit-card', 'bx bx-credit-card-alt', 'bx bx-wallet',

        // Safety & Security
        'bx bx-lock', 'bx bx-lock-open', 'bx bx-lock-alt', 'bx bx-shield', 'bx bx-shield-alt',
        'bx bx-shield-quarter', 'bx bx-first-aid', 'bx bx-plus-medical', 'bx bx-fire',

        // Accessibility
        'bx bx-wheelchair', 'bx bx-accessible', 'bx bx-braille', 'bx bx-sign-language',

        // Business
        'bx bx-printer', 'bx bx-fax', 'bx bx-copy', 'bx bx-file', 'bx bx-folder',
        'bx bx-folder-open', 'bx bx-briefcase', 'bx bx-briefcase-alt',

        // Outdoor
        'bx bx-tree', 'bx bx-palm-tree', 'bx bx-leaf', 'bx bx-sun', 'bx bx-moon',
        'bx bx-cloud', 'bx bx-umbrella', 'bx bx-wind', 'bx bx-snowflake',

        // Entertainment
        'bx bx-game', 'bx bx-joystick', 'bx bx-joystick-alt', 'bx bx-chess', 'bx bx-tennis-ball',
        'bx bx-basketball', 'bx bx-football', 'bx bx-baseball', 'bx bx-pool', 'bx bx-bowling-ball',

        // Housekeeping
        'bx bx-broom', 'bx bx-trash', 'bx bx-trash-alt', 'bx bx-recycle', 'bx bx-washer',
        'bx bx-dryer', 'bx bx-vacuum', 'bx bx-spray-can',

        // Climate Control
        'bx bx-cool', 'bx bx-sun', 'bx bx-moon', 'bx bx-cloud', 'bx bx-wind',
        'bx bx-thermometer', 'bx bx-snowflake', 'bx bx-water', 'bx bx-droplet',

        // Special Features
        'bx bx-star', 'bx bx-heart', 'bx bx-gift', 'bx bx-party', 'bx bx-confetti',
        'bx bx-cake', 'bx bx-champagne', 'bx bx-candle', 'bx bx-music', 'bx bx-slideshow',

        // Time Related
        'bx bx-time', 'bx bx-time-five', 'bx bx-alarm', 'bx bx-stopwatch', 'bx bx-calendar',
        'bx bx-calendar-event', 'bx bx-calendar-check', 'bx bx-calendar-x',

        // Payment & Money
        'bx bx-credit-card', 'bx bx-credit-card-front', 'bx bx-credit-card-alt', 'bx bx-dollar',
        'bx bx-euro', 'bx bx-pound', 'bx bx-rupee', 'bx bx-yen', 'bx bx-won', 'bx bx-bitcoin',

        // Communication
        'bx bx-phone', 'bx bx-phone-call', 'bx bx-phone-outgoing', 'bx bx-message',
        'bx bx-message-alt', 'bx bx-chat', 'bx bx-envelope', 'bx bx-mail-send',

        // Additional Amenities
        'bx bx-cctv', 'bx bx-smoke', 'bx bx-flame', 'bx bx-plug', 'bx bx-outlet',
        'bx bx-bulb', 'bx bx-lamp', 'bx bx-fan', 'bx bx-ac', 'bx bx-heater',

        // Pets
        'bx bx-bone',

        // Shopping
        'bx bx-store', 'bx bx-store-alt', 'bx bx-shopping-bag', 'bx bx-cart',
        'bx bx-cart-alt', 'bx bx-receipt', 'bx bx-package', 'bx bx-box',

        // Health & Wellness
        'bx bx-first-aid', 'bx bx-plus-medical', 'bx bx-band-aid', 'bx bx-pill',
        'bx bx-test-tube', 'bx bx-thermometer', 'bx bx-heart', 'bx bx-heart-circle',

        // Business Center
        'bx bx-printer', 'bx bx-scan', 'bx bx-copy', 'bx bx-file', 'bx bx-folder',
        'bx bx-folder-open', 'bx bx-briefcase', 'bx bx-briefcase-alt', 'bx bx-stamp',

        // Kids
        'bx bx-baby-carriage', 'bx bx-pacifier', 'bx bx-rattle', 'bx bx-balloon',
        'bx bx-puzzle', 'bx bx-block', 'bx bx-lego', 'bx bx-teddy',

        // Laundry
        'bx bx-washer', 'bx bx-dryer', 'bx bx-iron', 'bx bx-hanger', 'bx bx-tshirt',
        'bx bx-socks', 'bx bx-laundry', 'bx bx-detergent',
    ];
}

    // ... rest of your methods remain the same
    public function toggleIconModal()
    {
        $this->showIconModal = !$this->showIconModal;
        $this->iconSearch = ''; // Reset search when modal opens/closes
    }

    public function selectIcon($icon)
    {
        $this->selectedIcon = $icon;
        $this->showIconModal = false;
    }

    public function saveAmenityType()
    {
        $this->validate();

        AmenityType::create([
            'amenity_name' => $this->amenity_name,
            'icon' => $this->selectedIcon,
        ]);

        $this->reset(['amenity_name']);
        session()->flash('message', 'Amenity type added successfully!');
    }
}

// namespace App\Livewire;

// use App\Models\AmenityType;
// use Livewire\Component;
// use Livewire\WithFileUploads;

// class AmenityTypeForm extends Component
// {
//     use WithFileUploads;

//     public $amenity_name;
//     public $icon;
//     public $iconSearch = '';
//     public $showIconModal = false;
//     public $selectedIcon = 'bx bx-building';

//     protected $rules = [
//         'amenity_name' => 'required|string|max:255|unique:amenity_types,amenity_name',
//         'selectedIcon' => 'required|string',
//     ];

//     public function render()
//     {
//         return view('livewire.amenity-type-form', [
//             'filteredIcons' => $this->filterIcons(),
//         ]);
//     }

//     public function updatedIconSearch()
//     {
//         // Search updates happen reactively
//     }

//     public function filterIcons()
//     {
//         $phoenixIcons = [
//             'bx bx-building', 'bx bx-wifi', 'bx bx-swim', 'bx bx-car',
//             'bx bx-bed', 'bx bx-restaurant', 'bx bx-coffee', 'bx bx-dumbbell',
//             'bx bx-tv', 'bx bx-parking', 'bx bx-cool', 'bx bx-bath',
//             'bx bx-home', 'bx bx-hotel', 'bx bx-spa', 'bx bx-chair',
//             'bx bx-basketball', 'bx bx-tennis-ball', 'bx bx-bicycle',
//         ];

//         return empty($this->iconSearch)
//             ? $phoenixIcons
//             : array_filter($phoenixIcons, fn($icon) => str_contains($icon, $this->iconSearch));
//     }

//     public function showIconSelector()
//     {
//         $this->showIconModal = true;
//     }

//     public function selectIcon($icon)
//     {
//         $this->selectedIcon = $icon;
//         $this->showIconModal = false;
//     }

//     public function saveAmenityType()
//     {
//         $this->validate();

//         AmenityType::create([
//             'amenity_name' => $this->amenity_name,
//             'icon' => $this->selectedIcon,
//         ]);

//         $this->reset(['amenity_name', 'selectedIcon']);
//         session()->flash('message', 'Amenity type added successfully!');
//     }
// }
