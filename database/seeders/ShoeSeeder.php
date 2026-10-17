<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShoeSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('shoes')->insert([
            [
                'name' => 'Nike Air Monarch IV White Navy',
                'brand' => 'Nike',
                'price' => 899000,
                'size_range' => '39-45',
                'image' => 'sepatu1.jpeg',
                'sport_type' => 'Training',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Nike Air Force 1 '07 White Black",
                'brand' => 'Nike',
                'price' => 1499000,
                'size_range' => '39-45',
                'image' => 'sepatu2.jpeg',
                'sport_type' => 'Lifestyle',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Air Jordan 1 Retro High Black White',
                'brand' => 'Jordan',
                'price' => 2199000,
                'size_range' => '39-45',
                'image' => 'sepatu3.jpeg',
                'sport_type' => 'Basketball',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Nike Dunk Low Grey White',
                'brand' => 'Nike',
                'price' => 1399000,
                'size_range' => '39-45',
                'image' => 'sepatu4.jpeg',
                'sport_type' => 'Lifestyle',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Nike Dunk Low Black White',
                'brand' => 'Nike',
                'price' => 1399000,
                'size_range' => '39-45',
                'image' => 'sepatu5.jpeg',
                'sport_type' => 'Lifestyle',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Air Jordan 1 Low Grey White',
                'brand' => 'Jordan',
                'price' => 1699000,
                'size_range' => '39-45',
                'image' => 'sepatu6.jpeg',
                'sport_type' => 'Basketball',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Nike Air Barrage White Blue',
                'brand' => 'Nike',
                'price' => 1799000,
                'size_range' => '39-45',
                'image' => 'sepatu7.jpeg',
                'sport_type' => 'Training',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Nike Air Max 97 Triple White',
                'brand' => 'Nike',
                'price' => 2399000,
                'size_range' => '39-45',
                'image' => 'sepatu8.jpeg',
                'sport_type' => 'Lifestyle',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Nike V2K Run Metallic Grey',
                'brand' => 'Nike',
                'price' => 1899000,
                'size_range' => '39-45',
                'image' => 'sepatu9.jpeg',
                'sport_type' => 'Running',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Nike Zoom Vomero 5 Beige',
                'brand' => 'Nike',
                'price' => 2199000,
                'size_range' => '39-45',
                'image' => 'sepatu10.jpeg',
                'sport_type' => 'Running',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Nike Downshifter Black White',
                'brand' => 'Nike',
                'price' => 799000,
                'size_range' => '39-45',
                'image' => 'sepatu11.jpeg',
                'sport_type' => 'Running',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Nike Air Max 270 White Black',
                'brand' => 'Nike',
                'price' => 1999000,
                'size_range' => '39-45',
                'image' => 'sepatu12.jpeg',
                'sport_type' => 'Lifestyle',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}