<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pelanggan_2301010068>
 */
class Pelanggan2301010068Factory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'kode'=>$this->faker->unique()->regexify('[A-Za-z0-9]{4}'),
            'nama_pelanggan'=>$this->faker->word(),
            'alamat'=>$this->faker->streetAddress(),
            'jenis_kelamin'=>$this->faker->randomElement(['L', 'P']),
            'tanggal_lahir'=>$this->faker->date()
        ];

    }
}
