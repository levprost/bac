<?php

namespace Database\Seeders;

use App\Models\Bac;
use App\Models\Type;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Administrateur',
            'role' => 'ROLE_ADMIN',
            'email' => 'admin@truc.fr',
            'email_verified_at' => now(),
            'password' => Hash::make('test123'),
            'remember_token' => Str::random(10)
        ]);
        User::create([
            'name' => 'Utilisateur',
            'role' => 'ROLE_USER',
            'email' => 'user@pokedex.com',
            'password' => Hash::make('test123'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10)
        ]);
        User::factory(10)->create();
        Type::factory(5)->create();
        Bac::factory(10)->create();
    }
}
