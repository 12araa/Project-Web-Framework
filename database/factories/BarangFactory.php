<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Barang>
 */
class BarangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'kode' => $this->faker->unique()->regexify('[A-Za-z0-9]{4}'),
        'nama'=> $this->faker->word(),
        'harga'=> $this->faker->randomFloat(2,1000,100000),
        'is_aktif' =>'1'
        ];
    }

}
