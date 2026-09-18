<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ship;

class ShipSeeder extends Seeder
{
    public function run(): void
    {
        Ship::create([
            'name' => 'Ocean Cruiser',
            'description' => 'Kapal nyaman untuk perjalanan wisata laut bersama keluarga dan teman.',
            'price' => 1500000,
            'capacity' => 20,
            'image' => 'https://images.unsplash.com/photo-1540946485063-a40da27545f8?auto=format&fit=crop&w=1200&q=80',
            'status' => true,
        ]);

        Ship::create([
            'name' => 'Sea Explorer',
            'description' => 'Kapal tangguh untuk menjelajahi keindahan laut dan pulau-pulau.',
            'price' => 2000000,
            'capacity' => 15,
            'image' => 'https://images.unsplash.com/photo-1566847438217-76e82d383f84?auto=format&fit=crop&w=1200&q=80',
            'status' => true,
        ]);

        Ship::create([
            'name' => 'Ocean Luxury',
            'description' => 'Kapal premium dengan pengalaman perjalanan laut yang lebih eksklusif.',
            'price' => 3500000,
            'capacity' => 10,
            'image' => 'https://images.unsplash.com/photo-1605281317010-fe5ffe798166?auto=format&fit=crop&w=1200&q=80',
            'status' => true,
        ]);
    }
}