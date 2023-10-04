<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::Create([
            'code' => 'XCDAFGGG',
            'name' => 'Indomie',
            'price' => 3500
        ]);
        Product::Create([
            'code' => 'MSTMPI',
            'name' => 'Mie Sedap',
            'price' => 3500
        ]);
        Product::Create([
            'code' => 'SKKKKDD',
            'name' => 'samyang',
            'price' => 22500
        ]);
        Product::Create([
            'code' => 'MKPPNGG',
            'name' => 'Lemonilo',
            'price' => 7500
        ]);
        Product::Create([
            'code' => 'XYZZMPA',
            'name' => 'Mie Gaga',
            'price' => 3500
        ]);
    }
}
