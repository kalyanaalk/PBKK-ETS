<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Result>
 */
class ResultFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            // 'name' => fake()->name(),
            // 'email' => fake()->unique()->safeEmail(),
            // 'email_verified_at' => now(),
            // 'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            // 'remember_token' => Str::random(10),
            
            'id' => fake()->unique()->randomDigit(),
            'user_id' => fake()->unique()->randomDigit(),
            'nama' => fake()->name(),
            'notelp' => fake()->name(),
            'berat' => fake()->randomDigit(),
            'layanan' => fake()->name(),
            'kondisi' => fake()->name(),
            'bukti' => fake()->name(),
            
        ];

        // $table->id();
        // $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade')->constrained();
        // $table->string('nama');
        // $table->string('notelp');
        // $table->decimal('berat', 10, 2);
        // $table->string('layanan');
        // $table->string('kondisi');
        // $table->string('bukti');
        // $table->timestamps();
    }
}
