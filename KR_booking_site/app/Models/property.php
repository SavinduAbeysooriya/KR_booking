<?php

// namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Property extends Model
// {
//     use HasFactory;

//     protected $fillable = [
//         'owner_id',
//         'property_name',
//         'description',
//         'property_type',
//         'star_rating',
//         'address',
//         'city',
//         'province',
//         'country',
//         'postal_code',
//         'status',
//         'reviews',
//         'images',
//         'price',
//         'near_places',
//         'map_url',
//         'amenities',
//         'description_title',
//         'availability',
//         'near_places_highlight',
//     ];

//     protected $casts = [
//         'images' => 'array', // Cast JSON images field to array
//         'availability' => 'boolean', // Cast availability to boolean
//         'price' => 'decimal:2', // Cast price to decimal
//     ];

//     // Relationship with the User (owner)
//     public function owner()
//     {
//         return $this->belongsTo(User::class, 'owner_id');
//     }

//     // // Relationship with Amenities
//     // public function amenities()
//     // {
//     //     return $this->belongsTo(Amenities::class, 'amenities');
//     // }


//     public function amenities()
//     {
//         return $this->belongsTo(AmenityType::class, 'amenities');
//     }
// }


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'owner_id',
        'property_name',
        'description',
        'property_type',
        'star_rating',
        'address',
        'city',
        'province',
        'country',
        'postal_code',
        'status',
        'reviews',
        'images',
        'price',
        'near_places',
        'map_url',
        'amenities',
        'description_title',
        'availability',
        'near_places_highlight',
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'images' => 'array', // Cast JSON images field to array
        'availability' => 'boolean', // Cast availability to boolean
        'price' => 'decimal:2', // Cast price to decimal
    ];

    // Relationship with the User (owner)
    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }

    // Relationship with Amenities
    public function amenity()
    {
        return $this->belongsTo(AmenityType::class, 'amenities');
    }
}
