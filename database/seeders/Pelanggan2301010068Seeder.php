<?php

namespace Database\Seeders;

use App\Models\Pelanggan2301010068;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Pelanggan2301010068Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pelanggan2301010068::factory()->count(100)->create();
    }
}
