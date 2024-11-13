<?php

namespace Database\Seeders;

use App\Models\Barang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // //insert data menggunakan query builder
        // DB::table('barangs')->insert([
        //     'kode' => 'B001',
        //     'nama' => 'Buku Tulis',
        //     'harga' => 5500,
        //     'is_aktif' => '1'
        // ]);

        // //insert data menggunakan model eloquent
        // Barang::create([
        //     'kode' => 'B002',
        //     'nama' => 'Pensil',
        //     'harga' => 3000,
        //     'is_aktif' => '1'
        // ]);

        // membuat data dummy with factory
        Barang::factory()->count(100)->create();
    }
}
