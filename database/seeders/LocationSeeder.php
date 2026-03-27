<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Location;
use Illuminate\Support\Str;

class LocationSeeder extends Seeder
{
    public function run(): void
    {
        $locations = [
            // Delhi NCR
            ['city' => 'Delhi', 'state' => 'Delhi'],
            ['city' => 'Noida', 'state' => 'Uttar Pradesh'],
            ['city' => 'Greater Noida', 'state' => 'Uttar Pradesh'],
            ['city' => 'Gurgaon', 'state' => 'Haryana'],
            ['city' => 'Faridabad', 'state' => 'Haryana'],

            // Uttar Pradesh
            ['city' => 'Lucknow', 'state' => 'Uttar Pradesh'],
            ['city' => 'Kanpur', 'state' => 'Uttar Pradesh'],
            ['city' => 'Varanasi', 'state' => 'Uttar Pradesh'],

            // Madhya Pradesh
            ['city' => 'Bhopal', 'state' => 'Madhya Pradesh'],
            ['city' => 'Indore', 'state' => 'Madhya Pradesh'],
            ['city' => 'Gwalior', 'state' => 'Madhya Pradesh'],

            // Maharashtra
            ['city' => 'Mumbai', 'state' => 'Maharashtra'],
            ['city' => 'Pune', 'state' => 'Maharashtra'],
            ['city' => 'Nagpur', 'state' => 'Maharashtra'],

            // Gujarat (important for you)
            ['city' => 'Ahmedabad', 'state' => 'Gujarat'],
            ['city' => 'Surat', 'state' => 'Gujarat'],
            ['city' => 'Vadodara', 'state' => 'Gujarat'],
            ['city' => 'Rajkot', 'state' => 'Gujarat'],

            // Karnataka
            ['city' => 'Bangalore', 'state' => 'Karnataka'],
            ['city' => 'Mysore', 'state' => 'Karnataka'],

            // Tamil Nadu
            ['city' => 'Chennai', 'state' => 'Tamil Nadu'],
            ['city' => 'Coimbatore', 'state' => 'Tamil Nadu'],

            // Telangana
            ['city' => 'Hyderabad', 'state' => 'Telangana'],

            // West Bengal
            ['city' => 'Kolkata', 'state' => 'West Bengal'],

            // Rajasthan
            ['city' => 'Jaipur', 'state' => 'Rajasthan'],
            ['city' => 'Udaipur', 'state' => 'Rajasthan'],
        ];

        foreach ($locations as $loc) {
            Location::updateOrCreate(
                ['city' => $loc['city'], 'state' => $loc['state']],
                ['slug' => Str::slug($loc['city'].'-'.$loc['state'])]
            );
        }
    }
}
