<?php

namespace Database\Seeders;

use App\Models\Booking;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BookinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        factor(Booking::class, 3)->create();
    }
}
